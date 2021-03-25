<div class="field">
    <label class="label">Catégories</label>
    <div class="select is-multiple">
        <select name="loc[]" multiple>
            @foreach($localities as $locality)
                <option value="{{ $locality->id }}" {{ in_array($locality->id, old('loc') ?: $offer->locality->pluck('id')->all()) ? 'selected' : '' }}>{{ $locality->name }}</option>
            @endforeach
        </select>
    </div>
</div>