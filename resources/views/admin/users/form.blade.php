<div class="mb-3">
    <label>Username</label>
    <input type="text" name="username" value="{{ old('username', $user->username ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
    @if(isset($user))
        <small>Kosongkan jika tidak ingin mengganti password</small>
    @endif
</div>

<div class="mb-3">
    <label>Role</label>
    <select name="role" class="form-control">
        @foreach(['admin', 'pegawai', 'kepala_direktur'] as $role)
            <option value="{{ $role }}" {{ old('role', $user->role ?? '') == $role ? 'selected' : '' }}>
                {{ ucfirst($role) }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Gender</label>
    <select name="gender" class="form-control">
        <option value="">-- Pilih --</option>
        <option value="L" {{ old('gender', $user->gender ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ old('gender', $user->gender ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label>Tanggal Lahir</label>
    <input type="date" name="birth_date" value="{{ old('birth_date', $user->birth_date ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Telepon</label>
    <input type="text" name="phone" value="{{ old('phone', $user->phone ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="address" class="form-control">{{ old('address', $user->address ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Foto Profil (path)</label>
    <input type="text" name="profile_photo" value="{{ old('profile_photo', $user->profile_photo ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Pendidikan Terakhir</label>
    <input type="text" name="education" value="{{ old('education', $user->education ?? '') }}" class="form-control">
</div>