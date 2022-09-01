
    @foreach($categories as $all_categories)
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 mb-3">
            <div class="card" style="width: 16rem;">
                <img src="{{asset('uploads/thumb-1920-515358.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="font-family: 'Playfair Display', serif !important;" class="card-title"></h5>
                    <p class="card-text"></p>
                    <div>
                        <a href="#" style="display:inline-block" class="btn btn-primary">Check in &rarr;</a>
                        <form style="display:inline-block">
                            <input type="hidden" value="">
                            <button data-toggle="modal" style="display:inline-block" data-target="#showParticipant" aria-hidden="true" class="btn btn-dark ssss"> <i class="fa fa-eye"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

