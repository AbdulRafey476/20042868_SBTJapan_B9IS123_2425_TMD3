@extends('frontend.layouts.master')

@section('main-content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Gallery</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

    <!-- Start categories -->
    <section>
        <div class="container-fluid px-1">
            <!-- Gallery -->
            <div class="row mx-0">
                <div class="col-lg-4 col-md-12  mb-lg-0 px-1 ">
                    <div class="imghvr-push-right w-100 my-brdr-1">
                        <img src="fyenest/assets/images/pexels-valentin-antonucci-691640.jpg"
                            class="w-100 shadow-1-strong rounded " alt="Boat on Calm Water" />
                    </div>
                    <div class="imghvr-push-right w-100 pt-2">
                        <img src="fyenest/assets/images/pexels-aizhana-aldanova-983569.jpg"
                            class="w-100 shadow-1-strong rounded " alt="Wintry Mountain Landscape" />
                    </div>
                </div>

                <div class="col-lg-4  mb-lg-0 px-1">
                    <div class="imghvr-push-right w-100 my-brdr-1">
                        <img src="fyenest/assets/images/pexels-evg-kowalievska-1040384.jpg"
                            class="w-100 shadow-1-strong rounded " alt="Mountains in the Clouds" />
                    </div>
                    <div class="imghvr-push-right w-100 my-brdr-1 pt-2">

                        <img src="fyenest/assets/images/pexels-ihsan-adityawarman-1445696.jpg"
                            class="w-100 shadow-1-strong rounded " alt="Boat on Calm Water" />
                    </div>
                </div>

                <div class="col-lg-4  mb-lg-0 px-1">
                    <div class="imghvr-push-right w-100 my-brdr-1">

                        <img src="fyenest/assets/images/pexels-lumn-322207.jpg"
                            class="w-100 shadow-1-strong rounded " alt="Waves at Sea" />
                    </div>
                    <div class="imghvr-push-right w-100 my-brdr-1 pt-2">

                        <img src="fyenest/assets/images/pexels-edgar-serrano-1964970.jpg"
                            class="w-100 shadow-1-strong rounded " alt="Yosemite National Park" />
                    </div>
                </div>
            </div>
            <!-- Gallery -->
        </div>
    </section>
    <!-- End categories -->

    <!-- Start full width img section -->
    <section class="my-6">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-md-12 px-0 g-full-width">
                    <img src="fyenest/assets/images/galery-footer.jpg" class="img-fluid w-100" />
                </div>
            </div>
        </div>
    </section>
    <!-- End full width img section -->


    <!-- Start last gallery section -->
    <section class="mb-6">
        <div class="container-fluid px-3">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="row ">
                        <div class="col-md-6 px-1 ">
                            <div class="imghvr-push-right w-100 my-brdr-1">
                                <div class="casual-wear w-100">
                                    <img src="fyenest/assets/images/pexels-evg-kowalievska-1055691.jpg"
                                        class="img-fluid w-100" />

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-1 ">
                            <div class="row mx-">
                                <div class="col-md-12 pb-2">
                                    <div class="imghvr-push-right w-100 my-brdr-1">
                                        <div class="cat-img-box">
                                            <img src="fyenest/assets/images/pexels-andrea-piacquadio-972995.jpg"
                                                class="img-fluid " />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="imghvr-push-right w-100 my-brdr-1">
                                        <div class="cat-img-box">
                                            <img src="fyenest/assets/images/pexels-godisable-jacob-944761.jpg"
                                                class="img-fluid " />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End last gallery section -->

	<!--/ End Gallery -->

	<!-- Start Shop Newsletter  -->
	@include('frontend.layouts.newsletter')
	<!-- End Shop Newsletter -->

@endsection

@push('styles')
<style>
	.modal-dialog .modal-content .modal-header{
		position:initial;
		padding: 10px 20px;
		border-bottom: 1px solid #e9ecef;
	}
	.modal-dialog .modal-content .modal-body{
		height:100px;
		padding:10px 20px;
	}
	.modal-dialog .modal-content {
		width: 50%;
		border-radius: 0;
		margin: auto;
	}
</style>
@endpush
