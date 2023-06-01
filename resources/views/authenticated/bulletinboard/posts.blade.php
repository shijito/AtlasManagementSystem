@extends('layouts.sidebar')

@section('content')
<div class="board_area w-100 border m-auto d-flex">
  <div class="post_view w-75 mt-5">
    <!-- <p class="w-75 m-auto">投稿一覧</p> -->
    @foreach($posts as $post)
    <div class="post_area border w-75 m-auto p-3">
      <p><span>{{ $post->user->over_name }}</span><span class="ml-3">{{ $post->user->under_name }}</span>さん</p>
      <p><a href="{{ route('post.detail', ['id' => $post->id]) }}" style="color: #000; font-weight: bold;">{{ $post->post_title }}</a></p> 
      <div class="d-flex">
        @foreach($post->subcategories as $subcategory)
          <div class="">
            <input type="submit" name="sub_category" class="category_btn" value="{{ $subcategory->sub_category }}" >
          </div>
        @endforeach
        <div class="post_bottom_area d-flex">
          <div class="d-flex post_status">
          @foreach($post_counts as $post_count)
            @if($post->id == $post_count->id)
              <div class="mr-5">
                <i class="fa fa-comment"></i><span >{{ $post_count->post_comments_count }}</span>
              </div>
            @endif
          @endforeach
            <div>
              @if(Auth::user()->is_Like($post->id))
              <p class="m-0"><i class="fas fa-heart un_like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id) }}</span></p>
              @else
              <p class="m-0"><i class="fas fa-heart like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id) }}</span></p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="other_area w-25">
    <div class="h-100 m-4">
      <div class="btn btn-primary w-100 mt-5" style="border-radius: 10px;"><a href="{{ route('post.input') }}">投稿</a></div>
      <div class="search-word mt-2">
        <input type="text" placeholder="キーワードを検索" name="keyword" form="postSearchRequest">
        <input type="submit" value="検索" form="postSearchRequest" >
      </div>
        <input type="submit" name="like_posts"  value="いいねした投稿" form="postSearchRequest" class="mt-3">
        <input type="submit" name="my_posts"  value="自分の投稿" form="postSearchRequest">
      <div>
        <p class="mt-4">カテゴリー検索</p>
        <ul>
          @foreach($categories as $category)
            <li class="main_categories post_category_list" category_id="{{ $category->id }}">
              {{ $category->main_category }}　　　　　　　　　　　　<a class="arrow"></a>
            </li>
              @foreach($sub_categories as $sub_category)
              <div class="post_category_inner">
                @if($category->id == $sub_category->main_category_id)
                <input type="submit" name="category_posts" class="subcategory_btn" value="{{ $sub_category->sub_category }}" form="postSearchRequest">
                @endif
              </div>
              @endforeach
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <form action="{{ route('post.show') }}" method="get" id="postSearchRequest"></form>
  
</div>
@endsection