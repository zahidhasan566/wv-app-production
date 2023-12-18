
@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/order.css')}}" />
@endpush

@section('content')

    <!-- navbar start  -->
    <nav class="navbar navbar-expand-lg" id="order-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"
            ><img
                    src="./assets/images/order-logo.png"
                    class="img-fluid"
                    alt="logo"
                /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            En
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bangla</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my-account" href="#">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-white text-black" href="#"
                        ><i class="bi bi-text-right"></i
                            ></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end  -->

    <!-- tab start -->
    <div>
        <div>
            <div class="order-wraper">
                <div class="container">
                    <ul class="tabs">
                        <li class="tab active-tab" id="listItem1" onclick="openTab('listItem1','tab1')">
                            <div class="number">1</div>
                            Review & Payment
                        </li>
                        <li class="tab"  id="listItem2" onclick="openTab('listItem2','tab2')">
                            <div class="number">2</div>
                            Pick Date and Time
                        </li>
                        <li class="tab" id="listItem3"  onclick="openTab('listItem3','tab3')">
                            <div class="number">3</div>
                            Personal Data
                        </li>
                        <li class="tab" id="listItem4" onclick="openTab('listItem4','tab4')">
                            <div class="number">4</div>
                            Book Your Address
                        </li>
                        <li class="tab" id="listItem5"  onclick="openTab('listItem5','tab5')">
                            <div class="number">5</div>
                            Review & Payment
                        </li>
                    </ul>
                </div>
            </div>
            <!-- tab contents start -->
            <div class="container">

                <!-- tab 1 -->
                <div id="tab1" class="tab-content" style="display: block">
                </div>
                <!-- tab 2 -->
                <div id="tab2" class="tab-content">
                    <h2>Tab 2 Content</h2>
                    <p>This is the content of Tab 2.</p>
                </div>

                <!-- tab 3 -->
                <div id="tab3" class="tab-content">
                </div>
                <!-- tab 4 -->
                <div id="tab4" class="tab-content">
                </div>
                <div id="tab5" class="tab-content">
                </div>
            </div>
            <!-- tab contents end -->
        </div>
    </div>

@endsection


@section('page_scripts')

@stop
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script  type="text/javascript">
    this.openTab('listItem1','tab1');

    function openTab(listItem,tabName) {
        $.ajax({
            type:"POST",
            url:"{{ route('allOrder') }}",
            data:{
                "_token": "{{ csrf_token() }}",
                tabName:tabName},
            success:function(data){
                $('#'+ tabName).html(data)
                var i, tabContent, tabLinks;
                // Hide all tab content
                tabContent = document.getElementsByClassName("tab-content");
                for (i = 0; i < tabContent.length; i++) {
                    tabContent[i].style.display = "none";
                }

                // Remove the "active-tab" class from all tabs
                tabLinks = document.getElementsByClassName("tab");
                for (i = 0; i < tabLinks.length; i++) {
                    tabLinks[i].classList.remove("active-tab");
                }

                // Show the specific tab content
                document.getElementById(tabName).style.display = "block";


                 let element = document.querySelector('#'+ listItem);
                element.classList.add("active-tab");
                // Add the "active-tab" class to the clicked tab
               // event.currentTarget.classList.add("active-tab");


                //alert(data.success);

            }
        })


    }
</script>
<!-- tab end -->
