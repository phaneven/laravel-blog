@extends('layout')

@section('content')

    <div class="blog-header">
        <h1 class="blog-title">Phaneven's Blog</h1>
    </div>

    <div class="blog-container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="thumbnail">
                    @foreach ($articles as $article)
                        <article>
                            <h2>
                                <a href= {{action('ArticlesController@show', [$article -> id])}}> {{$article -> title}} </a>
                            </h2>
                            <div class="body">
                                {{$article -> body}}
                            </div>
                        </article>
                    @endforeach
                </div>
            </div><!-- /.blog-articles -->
        </div>
    </div>

@stop
