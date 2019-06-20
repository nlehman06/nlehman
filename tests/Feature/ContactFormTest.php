<?php

namespace Tests\Feature;

use App\Mail\ContactFormSubmitted;
use App\Validators\ReCaptcha;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactFormTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        app()->singleton(ReCaptcha::class, function() {
            $m = \Mockery::mock(ReCaptcha::class);

            $m->shouldReceive('validate')->once()->andReturn(true);

            return $m;
        });
    }

    /** @test */
    public function it_should_send_an_email_to_me_when_someone_submits_the_form()
    {
        Mail::fake();

        $message = [
            'name' => 'John Doe',
            'email' => 'johnd@test.com',
            'message' => 'Hello there!',
            'recaptcha' => 'test'
        ];

        $this->postJson(route('contact.store'), $message)
            ->assertSuccessful();

        Mail::assertQueued(ContactFormSubmitted::class, function($mail) {
            return $mail->hasTo('nathan@nlehman.dev') &&
                $mail->message['message'] = 'Hello there!' &&
                $mail->message['email'] = 'johnd@test.com';
        });
    }

    /** @test */
    public function contact_form_requires_all_fields()
    {
        $this->postJson(route('contact.store'), [])
            ->assertJsonValidationErrors([
                'name',
                'email',
                'message',
                'recaptcha'
            ]);
    }

    /** @test */
    public function name_field_needs_at_least_two_characters()
    {
        $message = [
            'name' => 'A',
            'email' => 'valid@email.com',
            'message' => 'Some message',
            'recaptcha' => 'test'
        ];
        $this->postJson(route('contact.store'), $message)
            ->assertJsonValidationErrors(['name']);
    }

    /** @test */
    public function email_must_be_a_valid_email()
    {
        $message = [
            'name' => 'Tony',
            'email' => 'blah',
            'message' => 'Some message',
            'recaptcha' => 'test'
        ];
        $this->postJson(route('contact.store'), $message)
            ->assertJsonValidationErrors(['email']);
    }

    /** @test */
    public function message_must_be_at_least_ten_characters()
    {
        $message = [
            'name' => 'Tony',
            'email' => 'valid@email.com',
            'message' => 'Some mess',
            'recaptcha' => 'test'
        ];
        $this->postJson(route('contact.store'), $message)
            ->assertJsonValidationErrors(['message']);
    }

    /** @test */
    public function message_requires_recaptcha_verification()
    {
        unset(app()[ReCaptcha::class]);

        $message = [
            'name' => 'Tony',
            'email' => 'valid@email.com',
            'message' => 'Some valid message',
            'recaptcha' => 'test'
        ];
        $this->postJson(route('contact.store'), $message)
            ->assertJsonValidationErrors(['recaptcha']);
    }
}
