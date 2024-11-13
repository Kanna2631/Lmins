<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            検索結果
        </h2>
    </x-slot>

<div>
    @foreach ($clinics as $clinic)
        <h4>{{$clinic->name}}</h4>
        <p>{{$clinic->address}}</p>
        <button class="btn" onclick="location.href='./reservations'" ><u>予約ページへ➭</u></p></button><br><br>
    @endforeach
</div>
</x-app-layout>