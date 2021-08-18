<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }} >> {{ $campaign->title }}
        </h2>
    </x-slot>

    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('campaigns.messages.create', $campaign->id) }}" class="btn btn-outline-success">Create new message</a>
            </div>
        </div>
    </div>
</x-app-layout>
