@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div
                    class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('errors'))
                <div
                    class="text-sm border border-t-8 rounded text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('errors')->first() }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Dashboard
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        You are logged in!
                    </p>
                </div>

                <form method="POST" action="{{ route('eForms.send') }}" class="p-6">
                    @csrf
                    <div class="flex flex-col">
                        <label for="nathan_email" class="inline-flex items-center">
                            <input type="checkbox" value="nathan@nlehman.dev" id="nathan_email" name="email[]" class="form-checkbox">
                            <span class="ml-2">nathan@nlehman.dev</span>
                        </label>
                    </div>
                    <div>
                        <label for="annette_email" class="inline-flex items-center">
                            <input type="checkbox" value="ancote@gmail.com" id="annette_email" name="email[]" class="form-checkbox">
                            <span class="ml-2">ancote@gmail.com</span>
                        </label>
                    </div>
                    <input type="submit" value="Send Evelyn's Daily Email" class="px-3 py-2 rounded shadow">
                </form>
            </div>
        </div>
    </div>
@endsection
