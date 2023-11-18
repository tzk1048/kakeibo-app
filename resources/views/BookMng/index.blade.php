<!DOCTYPE html>
<html>
    <head>
        <meta  charset="utf-8" />
        <title>書籍一覧</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"  />
    </head>
    <body>
        @include('commonparts.header',$common_header)
        {{--@include('commonparts.header',compact('message','message2'))--}}
        <form method="post" action="{{route('bookmanage.post')}}">
            @csrf
            <label>タイトル</label>
            <input type="text" name="title"><br>
            <label>著者</label>
            <input type="text" name="author"><br>
            <label>ISBNコード</label>
            <input type="text" name="isbn"><br>
            <label>購入日</label>
            <input type="date" name="datepurchased"><br>
            <label>金額</label>
            <input type="number" name="price"><br>
            <label>カテゴリー</label>
            <input type="text" name="bookcategory"><br>
            <label>保管場所</label>
            <input type="text" name="storage"><br>
            <input type="submit" name="booklist"  value="入力">
        </form>
        <table>
            @foreach($books as  $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->datepurchased }}</td>
                <td>{{ $book->price }}</td>
            </tr>
            @endforeach
        </table>
        {{--<h3>{{ $book->author }}</h3>
        <h3>{{ $book->price }}</h3>--}}
    </body>
</html>
