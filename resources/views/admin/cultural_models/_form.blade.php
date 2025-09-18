<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $culturalModel->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Icon (Font Awesome)</label>
    <input type="text" name="icon" class="form-control" value="{{ old('icon', $culturalModel->icon ?? '') }}">
    <small>Contoh: chess-king, users, cogs</small>
</div>

<div class="mb-3">
    <label>Warna Bootstrap</label>
    <input type="text" name="color" class="form-control" value="{{ old('color', $culturalModel->color ?? 'primary') }}">
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="description" class="form-control">{{ old('description', $culturalModel->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Poin (satu per baris)</label>
    <textarea name="points" class="form-control" rows="5">{{ old('points', isset($culturalModel) ? implode("\n", $culturalModel->points ?? []) : '') }}</textarea>
</div>
