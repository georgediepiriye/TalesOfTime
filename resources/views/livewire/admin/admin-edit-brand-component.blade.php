<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Brand

                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a href="{{ route('admin.brands') }}" class="btn btn-success pull-right" >All Brands</a>

                            </div>

                        </div>

                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}

                            </div>
                            
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateBrand">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4">Brand Name:</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Brand Name" class="form-control input-md" wire:model='name' wire:keyup="generateSlug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4"> Brand Slug:</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Brand Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label class="col-md-4"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
