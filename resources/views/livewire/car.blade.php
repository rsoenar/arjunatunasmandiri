<div>
    {{-- card header --}}
    <div class="card">
        <div class="card-header col card-header text-left">
            <div class="row align-items-right">
                <div class="col-md-3">
                    <a href="{{ route('car-input') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="col-md-3 offset-md-6"><label class="text-right g-col-6">
                        <input type="search" class="form-control form-control-md " wire:model="search"
                            placeholder="Search">
                    </label>
                </div>
            </div>
        </div>
        {{-- car body --}}
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="{{ URL::asset('images-car/fortuner.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                            Tersedia
                        </div>
                    </div>
                    <h5 class="card-title">Fortuner Diesel</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">D 1333 EW</li>
                    <li class="list-group-item">2018</li>
                    <li class="list-group-item">Manual Transmition</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ URL::asset('images-car/fortuner.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-warning text-lg">
                            Service
                        </div>
                    </div>
                    <h5 class="card-title">Card title</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ URL::asset('images-car/fortuner.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-danger text-lg">
                            Booking
                        </div>
                    </div>
                    <h5 class="card-title">Card title</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ URL::asset('images-car/fortuner.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-danger text-lg">
                            Booking
                        </div>
                    </div>
                    <h5 class="card-title">Card title</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ URL::asset('images-car/fortuner.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-danger text-lg">
                            Booking
                        </div>
                    </div>
                    <h5 class="card-title">Card title</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        {{-- end card body --}}
    </div>

</div>
