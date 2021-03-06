@extends('layouts.app')

@section('css')
	<link href="{{ asset('css/show.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="container">
		<h1 class='pagetitle'>レビュー詳細ページ</h1>
		<div class="card">
			<div class="card-body d-flex">
				<section class='review-main'>
					<h2 class='h2'>レビュー本文</h2>
					<p>{{ $review->body }}</p>
				</section>
				<aside class='review-image'>
			@if(!empty($review->image))
				<img class='book-image' src="{{ asset('storage/images/'.$review->image) }}">
			@else
				<img class='book-image' src="{{ asset('images/dummy.png') }}">
			@endif
				</aside>
			</div>
				<form method="post" action="/review/delete/{{$review->id}}" class="center">
				{{ csrf_field() }}
				<input type="submit" value="削除" class="btn btn-danger btn-back mb20">
				<a href="{{ route('index') }}" class='btn btn-info btn-back mb20'>一覧へ戻る</a>
				</form>
		</div>
	</div>
@endsection
