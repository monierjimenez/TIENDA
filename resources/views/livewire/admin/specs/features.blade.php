<div>
    @if( session()->has('flash') )
        <script>
            toastr.success("{{session()->get('flash')}}");
        </script>
    @elseif( session()->has('flasherror') )
        <script>
            toastr.error("{{session()->get('flasherror')}}");
        </script>
    @elseif( count($errors) != 0 )
        <script>
            toastr.error("An error has occurred, check the delivered data");
        </script>
    @endif
        <form wire:submit.prevent="addFeatures">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group {{ $errors->has('reference') ? 'has-error' : '' }}">
                            <div class="row">
                                <div class="col-xs-12">
                                    <a class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#myModalStock" data-backdrop="static" data-keyboard="false">
                                        ADD STOCK
                                    </a>
                                </div>
                            </div>
                            <label>Reference</label>
                            <input type="text" name='reference' wire:model="reference" class="form-control">
                            {!! $errors->first('reference', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label>Name</label>
                            <input type="text" name='name' wire:model="name" class="form-control">
                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('cost_price') ? 'has-error' : '' }}">
                            <label>Cost</label>
                            <input type="text" name='cost_price' wire:model="cost_price" class="form-control">
                            {!! $errors->first('cost_price', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('stock') ? 'has-error' : '' }}">
                            <label>Stock</label>
                            <input type="text" name='stock' wire:model="stock" class="form-control">
                            {!! $errors->first('stock', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('condition') ? 'has-error' : '' }}">
                            <label>Condition</label>
                            <select wire:model="condition" class="form-control" >
                                <option value="0" {{ old($spec->condition) == 1 ? 'selected' : ''}}>Public</option>
                                <option value="1" {{ old($spec->condition) == 0 ? 'selected' : ''}}>Draf</option>
                            </select>
                            {!! $errors->first('condition', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 {{ $errors->has('sale_price_before') ? 'has-error' : '' }}">
                                    <label>Sale price before</label>
                                    <input type="text" name='sale_price_before' wire:model="sale_price_before" class="form-control">
                                    {!! $errors->first('sale_price_before', '<span class="help-block">:message</span>') !!}
                                    <input type="hidden" wire:model="idspec">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" {{ $errors->has('sale_price') ? 'has-error' : '' }}">
                            <label>Sale price</label>
                            <input type="text" name='sale_price' wire:model="sale_price" class="form-control">
                            {!! $errors->first('sale_price', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('bulk_weight') ? 'has-error' : '' }}">
                            <label>Bulk Weight</label>
                            <input type="text" name='bulk_weight' wire:model="bulk_weight" class="form-control">
                            {!! $errors->first('bulk_weight', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                            @if ($photo)
                                Photo Preview:
                                <img src="{{ $photo->temporaryUrl() }}" class="profile-user-img img-responsive img-circle">
                            @endif

                            @if ( $spec->image != null && !$photo )
                                    <img src="/images/{{ $spec->image }}" class="profile-user-img img-responsive img-circle">
                            @endif
                            <label>Photo</label>
                            <input type="file" wire:model="photo">
                            {!! $errors->first('photo', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class='btn btn-primary btn-block'>Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>

@push('modal')
    @include('livewire.admin.specs.addstockproduct')
@endpush

