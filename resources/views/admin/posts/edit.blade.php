@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', ['post' => $post]) }}" method="post" class="row g-3 needs-validation" novalidate>
            @method('PUT')
            @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}">
                  <div class="invalid-feedback">
                    @error('title')
                        <ul>
                            @foreach ($errors->get('title') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                  </div>
                </div>

                <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
                  <div class="invalid-feedback">
                    @error('slug')
                        <ul>
                            @foreach ($errors->get('slug') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                  </div>
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label">URL Immagine</label>
                  <input type="url" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image', $post->image) }}">
                  <div class="invalid-feedback">
                    @error('image')
                        <ul>
                            @foreach ($errors->get('image') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                  </div>
                </div>

                <div class="mb-3">
                  <label for="content" class="form-label">Contenuto</label>
                  <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $post->content) }}</textarea>
                  <div class="invalid-feedback">
                    @error('content')
                        <ul>
                            @foreach ($errors->get('content') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                  </div>
                </div>

                <div class="mb-3">
                  <label for="excerpt" class="form-label">Excerpt</label>
                  <textarea type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt">{{ old('excerpt', $post->excerpt) }}</textarea>
                  <div class="invalid-feedback">
                    @error('excerpt')
                        <ul>
                            @foreach ($errors->get('excerpt') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Modify</button>
                </div>
        </form>
    </div>
@endsection
