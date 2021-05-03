<x-app-layout>
@section('title', '在庫登録')
    <x-slot name="header">
        <h2 class="text-lg text-gray-800 leading-tight">
            {{ __('在庫登録') }}
        </h2>
    </x-slot>

    <div class="flex justify-center mt-12">
        <form action="/list/addCheck" method="post" class="grid grid-cols-1 gap-6">
        @csrf
            <label class="block">
                <span class="text-gray-700">店名</span>
                <input type="text" name="shop" value="{{old('shop')}}"
                class=" block rounded-md border-gray-300 shadow-sm focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-30">
                @error('shop')
                <p>❗️<span class="text-red-500">{{$message}}</span</p>
                @enderror
            </label>

            <label class="block">
                <span class="text-gray-700">購入日</span>
                <input type="date" name="purchase_date" value="{{old('purchase_date')}}"
                class=" block rounded-md border-gray-300 shadow-sm focus:border-purple-400 focus:ring focus:ring-purple-200 focus:ring-opacity-30">
                @error('purchase_date')
                <p>❗️<span class="text-red-500">{{$message}}</span</p>
                @enderror
            </label>

            <label class="block">
                <span class="text-gray-700">期限</span>
                <input type="date" name="deadline" value="{{old('deadline')}}"
                class=" block rounded-md border-gray-300 shadow-sm focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-30">
                @error('deadline')
                <p>❗️<span class="text-red-500">{{$message}}</span></p>
                @enderror
            </label>

            <label class="block">
                <span class="text-gray-700">商品名</span>
                <input type="text" name="name" value="{{old('name')}}"
                class=" block rounded-md border-gray-300 shadow-sm focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-30">
                @error('name')
                <p>❗️<span class="text-red-500">{{$message}}</span</p>
                @enderror
            </label>

            <label class="block">
                <span class="text-gray-700">値段</span>
                <input type="text" name="price" value="{{old('price')}}"
                class=" block rounded-md border-gray-300 shadow-sm focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-30"></input>
                @error('price')
                <p>❗️<span class="text-red-500">{{$message}}</span</p>
                @enderror
            </label>

            <label class="block">
                <span class="text-gray-700">数量</span>
                <input type="number" name="number" value="{{old('number')}}"
                class=" block rounded-md border-gray-300 shadow-sm focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-30"></input>
                @error('number')
                <p class="-mt-14">❗️<span class="text-red-500">{{$message}}</span</p>
                @enderror
            </label>

            <div class="flex justify-center">
                <button class="w-28 py-2 border-2 border-purple-500 bg-gradient-to-r from-purple-200 to-pink-200 font-semibold rounded
                                md:mt-6 md:w-32">登録</button>
            </div>
        </form>
    </div>

    <div class="mt-6 mb-12 flex justify-center">
                <a href="/list"
                    class="py-2 px-4 border-2 border-purple-500 bg-gradient-to-r from-purple-200 to-pink-200 font-semibold hover:opacity-75 rounded
                            md:w-32">一覧に戻る</a>
            </div>
</x-app-layout>
