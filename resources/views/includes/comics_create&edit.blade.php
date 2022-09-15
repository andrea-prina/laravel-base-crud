<div class="col-6">
    <label for="input-series" class="form-label">Series</label>
    <input type="text" class="form-control" id="input-series" name="series" value="{{ $comic->series }}">
</div>

<div class="col-6">
    <label for="input-title" class="form-label">Title</label>
    <input type="text" class="form-control" id="input-title" name="title" value="{{ $comic->title }}">
</div>

<div class="col-12">
    <label for="input-description" class="form-label">Description</label>
    <textarea name="description" id="input-description" cols="30" rows="10" class="form-control"> {{ $comic->description }} </textarea>
</div>

<div class="col-12">
    <label for="input-image-url" class="form-label">Image Thumb URL</label>
    <input type="text" class="form-control" id="input-image-url" name="thumb" value="{{ $comic->thumb }}">
</div>

<div class="col-3">
    <label for="input-type" class="form-label">Type</label>
    <select id="input-type" class="form-select" name="type">
        <option @if($comic->type == '') selected @endif>Choose...</option>
        <option @if($comic->type == 'comic book') selected @endif>comic book</option>
        <option @if($comic->type == 'graphic novel') selected @endif>graphic novel</option>
    </select>
</div>

<div class="col-3">
    <label for="input-sale-date" class="form-label">Sale Date</label>
    <input type="date" class="form-control" id="input-sale-date" name="sale-date" value="{{ $comic->sale_date }}">
</div>

<div class="col-3">
    <label for="input-price" class="form-label">Price</label>
    <input type="text" class="form-control" id="input-price" name="price" value="{{ $comic->price }}">
</div>

<div class="col-3 d-flex align-items-end">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>