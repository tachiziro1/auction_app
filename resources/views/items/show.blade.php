<p>
    <b>商品名：{{ $item->name }}</b>
    </p>
    
    <p>
    <b>商品詳細：{{ $item->description }}</b>
    </p>
    
    <p>
    <b>価格：{{ $item->price }}</b>
    </p>
    
    <p>
    <b>出品者：{{ $item->seller }}</b>
    </p>
    
    <p>
    <b>電子メール：{{ $item->email }}</b>
    </p>
    
    <p>
        <img src="{{ $item->image_url }}">
    </p>
    {{-- <!-- 商品のidを元に編集ページへ遷移する -->
    <a href="/items/{{ $item->id }}/edit">編集する</a> --}}
<a href="/items/{{ $item->id }}/edit"><button>編集する</button></a>
<form action="/items/{{ $item->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>