
<div class="col-6 position-relative">
    <label for="input-series" class="form-label">Series</label>
    <input type="text" class="form-control @error('series') mb-4 border-danger @enderror" id="input-series" name="series" value="{{ old('series', $comic->series) }}">
    @include('includes.validation_error', ['input' => 'series'])
</div>

<div class="col-6 position-relative">
    <label for="input-title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') mb-4 border-danger @enderror" id="input-title" name="title" value="{{ old('title', $comic->title) }}">
    @include('includes.validation_error', ['input' => 'title'])
</div>

<div class="col-12 position-relative">
    <label for="input-description" class="form-label">Description</label>
    <textarea name="description" id="input-description" cols="30" rows="10" class="form-control @error('series') mb-4 border-danger @enderror"> {{ old('description', $comic->description) }} </textarea>
    @include('includes.validation_error', ['input' => 'description'])
</div>

<div class="col-12 position-relative">
    <label for="input-image-url" class="form-label">Image Thumb URL</label>
    <input type="text" class="form-control @error('description') mb-4 border-danger @enderror" id="input-image-url" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
    @include('includes.validation_error', ['input' => 'thumb'])
</div>

<div class="col-3 position-relative">
    <label for="input-type" class="form-label">Type</label>
    <select id="input-type" class="form-select @error('type') mb-4 border-danger @enderror" name="type">
        <option @if($comic->type == '') selected @endif value=""></option>
        <option @if($comic->type == 'comic book') selected @endif>comic book</option>
        <option @if($comic->type == 'graphic novel') selected @endif>graphic novel</option>
    </select>
    @include('includes.validation_error', ['input' => 'type'])
</div>

<div class="col-3 position-relative">
    <label for="input-sale-date" class="form-label">Sale Date</label>
    <input type="date" class="form-control @error('sale-date') mb-4 border-danger @enderror" id="input-sale-date" name="sale-date" value="{{ old('sale-date', $comic->sale_date) }}">
    @include('includes.validation_error', ['input' => 'sale-date'])
</div>

<div class="col-3 position-relative">
    <label for="input-price" class="form-label">Price</label>
    <input type="text" class="form-control @error('price') mb-4 border-danger @enderror" id="input-price" name="price" value="{{ old('price', $comic->price) }}">
    @include('includes.validation_error', ['input' => 'price'])
</div>

<div class="col-12 d-flex align-items-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>