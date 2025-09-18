@csrf
<div class="mb-3">
    <label class="form-label">Isi Dasar Hukum</label>
    <textarea name="title" class="form-control" rows="4" required>{{ old('title', $legalBase->title) }}</textarea>
</div>
<div class="d-flex gap-2">
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save me-1"></i> Simpan
    </button>
    <a href="{{ route('admin.legal-bases.index') }}" class="btn btn-secondary">Kembali</a>
</div>
