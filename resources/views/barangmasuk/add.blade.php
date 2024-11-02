




<div class="mb-3">
                <label for="tipebarang" class="form-label">Tipe Barang</label>
                @if ($goods->count() === 1)
                <select name="barang_id" id="barang_id"
                    class="form-select @error('category_id') is-invalid @enderror"" 
                    readonly>
                    @foreach ($goods as $good)
                    <option value=" {{ $good->id }}" selected>
                    {{ $good->tipe_barang }}
                    </option>
                    @endforeach
                </select>
                @else
                <select name="barang_id" id="barang_id"
                    class=" form-select">
                    <option selected="" disabled="">
                        Select a good:
                    </option>

                    @foreach ($goods as $good)
                    <option value="{{ $good->id }}" @if(old('barang_id')==$good->id) selected="selected" @endif>
                        {{ $good->tipe_barang }}
                    </option>
                    @endforeach
                </select>
                @endif
            </div>