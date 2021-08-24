<div>
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
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <div class="row"><br>
                            <div class="col-xs-9 {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input type="text" name='name' wire:model="name" class="form-control">
                                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                <input type="hidden" wire:model="idspec">
                            </div>
                            <div class="col-xs-3">
                                <button type="submit" class='btn btn-primary btn-block'>Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                            <label>List Features</label>
                            <table id="post-table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Condition</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($featurespecs as $featurespec)
                                        <tr>
                                            <td>{{ $featurespec->name }}</td>
                                            <td>
                                                @if( $featurespec->condition == 0 ) <i class="fa fa-check"></i> @else <i class="fa fa-close"></i> @endif
                                            </td>
                                            <td> <button wire:click="delete({{ $featurespec->id }})"> Eliminar</button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


