@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">


        <div class="row profile-body">
          <!-- left wrapper start -->

          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">

       <div class="card">
    <div class="card-body">
        <h6 class="card-title">Edit Property </h6>


        <form method="post" action="{{ route('update.property.thambnail') }}" id="myForm" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $property->id }}">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Property Name </label>
                <input type="text" name="property_name" class="form-control" value="{{ $property->property_name }}" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Property Status</label>
               <select name="property_status" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Select Status</option>
                <option value="rent" {{ $property->property_status == 'rent' ? 'selected' : '' }} >For Rent</option>
                <option value="buy" {{ $property->property_status == 'buy' ? 'selected' : '' }}>For Buy</option> 
            </select>
            </div>
        </div><!-- Col -->


    <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Lowest Price </label>
                <input type="text" name="lowest_price" class="form-control" value="{{ $property->lowest_price }}"  >
            </div>
        </div><!-- Col -->


            <div class="col-sm-6">
            <div class="form-group mb-3">
                <label class="form-label">Max Price </label>
                <input type="text" name="max_price" class="form-control" value="{{ $property->max_price }}"  >
            </div>
        </div><!-- Col -->


    </div><!-- Row -->



    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">BedRooms</label>
                <input type="text" name="bedrooms"  class="form-control" value="{{ $property->bedrooms }}" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Bathrooms</label>
                <input type="text" name="bathrooms"  class="form-control" value="{{ $property->bathrooms }}" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Garage</label>
                 <input type="text" name="garage"  class="form-control" value="{{ $property->garage }}" >
            </div>
        </div><!-- Col -->

          <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Garage Size</label>
                 <input type="text" name="garage_size"  class="form-control"value="{{ $property->garage_size }}"  >
            </div>
        </div><!-- Col --> 

    </div><!-- Row -->


    <div class="row">
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address"  class="form-control" value="{{ $property->address }}" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city"  class="form-control" value="{{ $property->city }}" >
            </div>
        </div><!-- Col -->
        <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">State</label>
                 <input type="text" name="state"  class="form-control" value="{{ $property->state }}" >
            </div>
        </div><!-- Col -->

          <div class="col-sm-3">
            <div class="mb-3">
                <label class="form-label">Postal Code </label>
                 <input type="text" name="postal_code"  class="form-control" value="{{ $property->postal_code }}" >
            </div>
        </div><!-- Col --> 

    </div><!-- Row -->


    <div class="row">
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Property Size</label>
                <input type="text" name="property_size"  class="form-control" value="{{ $property->property_size }}"  >
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Property Video</label>
                <input type="text" name="property_video"  class="form-control" value="{{ $property->property_video }}"  >
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Neighborhood</label>
                 <input type="text" name="neighborhood"  class="form-control" value="{{ $property->neighborhood }}" >
            </div>
        </div><!-- Col -->


    </div><!-- Row -->




    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Latitude</label>
                <input type="text" name="latitude" class="form-control" value="{{ $property->latitude }}" >
                <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Go here to get Latitude from address</a>
            </div>
        </div><!-- Col -->
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label">Longitude</label>
                <input type="text" name="longitude" class="form-control" value="{{ $property->longitude }}" >
                 <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Go here to get Longitude from address</a>
            </div>
        </div><!-- Col -->
    </div><!-- Row -->



        <div class="row">
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Property Type </label>
                <select name="ptype_id" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Select Type</option>
               @foreach($propertytype as $ptype)
               <option value="{{ $ptype->id }}" {{ $ptype->id == $property->ptype_id ? 'selected' : '' }}>{{ $ptype->type_name }}</option>
               @endforeach
            </select>
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label">Property Amenities </label>
     <select name="amenities_id[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">

                 @foreach($amenities as $ameni)
                 <option value="{{ $ameni->id }}" {{ (in_array($ameni->id,$property_ami)) ? 'selected' : '' }} >{{ $ameni->amenitis_name }}</option>
               @endforeach

            </select>
            </div>
        </div><!-- Col -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label class="form-label"> Agent </label>
                 <select name="agent_id" class="form-select" id="exampleFormControlSelect1">
                <option selected="" disabled="">Select Agent</option>
               @foreach($activeAgent as $agent)
               <option value="{{ $agent->id }}" {{ $agent->id == $property->agent_id ? 'selected' : '' }}>{{ $agent->name }}</option>
               @endforeach
            </select>
            </div>
        </div><!-- Col -->


    </div><!-- Row -->


      <div class="col-sm-12">
            <div class="mb-3">
                <label class="form-label">Short Description</label>
          <textarea name="short_descp" class="form-control" id="exampleFormControlTextarea1" rows="3"> 
 {{ $property->short_descp }} 
          </textarea>

            </div>
        </div><!-- Col -->



      <div class="col-sm-12">
            <div class="mb-3">
                <label class="form-label">Long Description</label>

                <textarea name="long_descp" class="form-control" name="tinymce" id="tinymceExample" rows="10">
           {!! $property->long_descp !!} 
                </textarea>

            </div>
        </div><!-- Col -->


<hr>

 <div class="mb-3">
            <div class="form-check form-check-inline">
                <input type="checkbox" name="featured" value="1" class="form-check-input" id="checkInline1" {{ $property->featured == '1' ? 'checked' : '' }} >
                <label class="form-check-label" for="checkInline1">
                   Features Property 
                </label>
            </div>


         <div class="form-check form-check-inline">
            <input type="checkbox" name="hot" value="1" class="form-check-input" id="checkInline" {{ $property->hot == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="checkInline">
                    Hot Property 
                </label>
            </div>


        </div>





 <button type="submit" class="btn btn-primary">Save Changes </button>


            </form>

    </div>
</div>



            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->

          <!-- right wrapper end -->
        </div>

			</div>

  <!--  /// Property Main Thambnail Image Update //// -->

  <div class="page-content" style="margin-top: -35px;" > 
       
    <div class="row profile-body"> 
      <div class="col-md-12 col-xl-12 middle-wrapper">
        <div class="row">
   
   <div class="card">
<div class="card-body">
    <h6 class="card-title">Edit Main Thambnail Image </h6>
        

<form method="post" action="{{ route('update.property.thambnail') }}" id="myForm" enctype="multipart/form-data">
            @csrf

    <input type="hidden" name="id" value="{{ $property->id }}">
    <input type="hidden" name="old_img" value="{{ $property->property_thambnail }}" >

     <div class="row mb-3">
        <div class="form-group col-md-6">
            <label class="form-label">Main Thambnail </label>
            <input type="file" name="property_thambnail" class="form-control" onChange="mainThamUrl(this)"  >

            <img src="" id="mainThmb">

        </div>


           <div class="form-group col-md-6">
            <label class="form-label">  </label> 
            <img src="{{ asset($property->property_thambnail) }}" style="width:100px; height:100px;">
        </div>
    </div><!-- Col -->

<button type="submit" class="btn btn-primary">Save Changes </button>


        </form> 
    </div>
      </div>

    </div>
</div>
</div>
</div> 
 <!--    /// End  Property Main Thambnail Image Update //// -->

<!--  /// Property Multi Image Update //// -->


<div class="page-content" style="margin-top: -35px;" > 

    <div class="row profile-body"> 
      <div class="col-md-12 col-xl-12 middle-wrapper">
        <div class="row">

   <div class="card">
<div class="card-body">
    <h6 class="card-title">Edit Multi Image  </h6>


<form method="post" action="{{ route('update.property.thambnail') }}" id="myForm" enctype="multipart/form-data">
            @csrf


<div class="table-responsive">
<table class="table table-striped">
<thead>
    <tr>
        <th>Sl</th>
        <th>Image</th>
        <th>Change Image </th>
        <th>Delete </th> 
    </tr>
</thead>
<tbody>

    @foreach($multiImage as $key => $img)
    <tr>

         <td>{{ $key+1 }}</td>

        <td class="py-1">
            <img src="{{ asset($img->photo_name) }}" alt="image"  style="width:50px; height:50px;">
        </td> 

        <td> 
        <input type="file" class="form-group" name="multi_img">
        </td>
        <td>
<input type="submit" class="btn btn-primary px-4" value="Update Image" >

<a href="" class="btn btn-danger" id="delete">Delete </a>
        </td>
    </tr>
    @endforeach

</tbody>
</table>
</div>



<br><br>
<button type="submit" class="btn btn-primary">Save Changes </button>


        </form> 
    </div>
      </div>

    </div>
</div>
</div>
</div> 


<!--  /// End Property Multi Image Update //// -->














<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                property_name: {
                    required : true,
                },
                 property_status: {
                    required : true,
                },
                 lowest_price: {
                    required : true,
                },
                 max_price: {
                    required : true,
                },
                 ptype_id: {
                    required : true,
                },
                 
                
            },
            messages :{
                property_name: {
                    required : 'Please Enter Property Name',
                },
                 property_status: {
                    required : 'Please Select Property Status',
                },
                lowest_price: {
                    required : 'Please Enter Lowest Price',
                },
                max_price: {
                    required : 'Please Enter Max Price',
                },
                ptype_id: {
                    required : 'Please Select Property Type',
                }, 
                 
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 <script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
              $('#mainThmb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    } 
 </script>


 <script> 
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>

@endsection