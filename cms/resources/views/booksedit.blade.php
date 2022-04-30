@extends('layouts.app')
@section('content')
    <div class="row container">
        <div class="col-md-12">
            <!-- ↓バリデーションエラーの表示に使用-->
						@include('common.errors')
            <!-- ↑バリデーションエラーの表示に使用-->
            <form action="{{ url('books/update') }}" method="POST">
                <!-- item_name -->
                <div class="form-group p-2">
                    <label for="user_name">氏名</label>
                    <input type="text" name="user_name" class="form-control" id="user_name" value="{{$book->user_name}}">
                </div>
                <!--/ item_name -->
                
                <!-- item_number -->
                <div class="form-group p-2">
                    <label for="user_email">メールアドレス</label>
                    <input type="text" name="user_email" class="form-control" id="user_email" value="{{$book->user_email}}">
                </div>
                <!--/ item_number -->
                
                <!-- item_amount -->
                <div class="form-group p-2">
                    <label for="user_sakubun">作文</label>
                    <input type="text" name="user_sakubun" class="form-control" id="user_sakubun" value="{{$book->user_sakubun}}">
                </div>
                <!--/ item_amount -->
                
                <!-- published -->
                <div class="form-group p-2">
                    <label for="user_price">希望購入金額</label>
                    <input type="number" name="user_price" class="form-control" id="user_price" value="{{$book->user_price}}">
                </div>
                <!--/ published -->
                
                <!-- Save ボタン/Back ボタン -->
                <div class="form-group p-2">
	                <div class="well well-sm">
	                    <button type="submit" class="btn btn-primary">Save</button>
	                    <a class="btn btn-link pull-right" href="{{ url('list') }}"> Back</a>
	                </div>
                </div>
                <!--/ Save ボタン/Back ボタン -->
                
                <!-- id 値を送信 -->
                <input type="hidden" name="id" value="{{$book->id}}" />
                <!--/ id 値を送信 -->
                
                <!-- CSRF -->
                @csrf
                <!--/ CSRF -->
            </form>
        </div>
    </div>
@endsection