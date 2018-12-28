@extends('layouts.app')



@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">



                <div class="panel-body">

                    <form action="{{ route('posts.post') }}" method="POST">

                        {{ csrf_field() }}

                    <div class="card">

                        <div class="container-fliud">

                            <div class="wrapper row">

                                <div class="preview col-md-6">

                                    

                                    <div class="preview-pic tab-content">

                                      <div class="tab-pane active" id="pic-1"><img src="\upload\{{$post->foto}}" style="margin-top: 20px;"></img></div>

                                    </div>



                                </div>

                                <div class="details col-md-6">

                                    <h3 class="product-title">{{$post->name}}</h3>

                                    <div class="rating">

                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $post->userAverageRating }}" data-size="xs">

                                        <input type="hidden" name="id" required="" value="{{ $post->id }}">

                                        <span class="review-no">422 reviews</span>

                                        <br/>

                                        <button class="btn btn-success">Submit Review</button>

                                    </div>

                                    <p class="product-description">{{$post->tentang}}</p>

                                    <h4 class="price">current price: <span>Rp. {{$post->tarif}},00</span></h4>

                                    <strong><a href="{{$post->web}}" target="_blank">Website</a></strong>

                                    <p class="email">Email : {{$post->email}}</p>


                                </div>

                            </div>

                        </div>

                    </div>

                    </form>



                </div>

            </div>

        </div>

    </div>

</div>



<script type="text/javascript">

    $("#input-id").rating();

</script>

@endsection