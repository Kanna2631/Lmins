<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())) }}">
 <body>
     <h1 class="title">編集画面</h1>
     <div class="content">
        <form action="/children/{{ $child->id }}" method="CHILD">
            @csrf
            @method('PUT')
           <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='child[title]' value="{{ $child->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='child[body]' value="{{ $child->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
     </div>
   </body>
</html>