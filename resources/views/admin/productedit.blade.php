<x-admin-layout>
@php
            $productCategory = ['Urban plot', 'Upcountry plot', 'House', 'Apartments'];
@endphp
        <div class="new-product bg-white p-4 rounded-md my-4"  id="new-product">
          <h2 class="text-[rgb(4,46,255)] font-semibold text-base md:text-xl py-4 capitalize">add new product</h2>
          <div class="new-product-form">
            <form action="{{route('property.update', $property)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="form-row w-full flex flex-col md:flex-row justify-between">
                <div class="input-box md:basis-[48%]">
                  <label for="category" class="block py-3">Select Category:</label>
                  <select name="category" id="category" class="@error('category') border-red-500 @enderror border-2 outline-none rounded-md px-4 py-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                    @if (!old('category') || $property->category)
                    <option value="None" selected disabled hidden>Select a category</option>
                    @endif
                    @foreach ($productCategory as $category)
                        <option value="{{ $category }}" @selected(old('category') ?? $property->category == $category)>{{ $category }}</option>
                    @endforeach
                  </select>
                  @error('category')
                    <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box md:basis-[48%]">
                  <label for="ownersName" class="block py-3">Enter the Owner's name:</label>
                  <input type="text" name="ownersName" id="ownersName" value="{{old('ownersName') ?? $property->ownersName }}"  class="@error('ownersName') border-red-500 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('ownersName')
                    <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="form-row w-full flex flex-col md:flex-row justify-between">
                <div class="input-box md:basis-[48%]">
                    <label for="location" class="block py-3">Enter the location of property:</label>
                    <input type="text" name="location" id="location" value="{{old('location') ?? $property->location }}" class="@error('location') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                    @error('location')
                    <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                    @enderror
                </div>
                <div class="input-box md:basis-[48%]">
                  <label for="propertyPrice" class="block py-3">Enter the price of the property:</label>
                  <input type="number" name="propertyPrice" id="propertyPrice" value="{{old('propertyPrice') ?? $property->price }}" class="@error('propertyPrice') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('propertyPrice')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <button type="submit" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">Edit this property information</button>
            </form>
          </div>
          </table>
        </div>
        <script>
            const input1 = document.querySelector('.file1');
            const input2 = document.querySelector('.file2');
            const input3 = document.querySelector('.file3');
            const input4 = document.querySelector('.file4');
            const fileBox1 =  document.querySelector('.input-box1');
            const fileBox2 =  document.querySelector('.input-box2');
            const fileBox3 =  document.querySelector('.input-box3');
            const fileBox4 =  document.querySelector('.input-box4');
            const orignalInfoBox1 =  document.querySelector('.original-info1');
            const orignalInfoBox2 =  document.querySelector('.original-info2');
            const orignalInfoBox3 =  document.querySelector('.original-info3');
            const orignalInfoBox4 =  document.querySelector('.original-info4');
            const newProductForm = document.querySelector('#new-product');



            input1.addEventListener('change', function(){
            // input1.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn1"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox1.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            input2.addEventListener('change', function(){
            // input2.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn2"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox2.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            input3.addEventListener('change', function(){
            // input3.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn3"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox3.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            input4.addEventListener('change', function(){
            // input4.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn4"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox4.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            window.onclick = (e) => {
            if(e.target.classList.contains('remove-btn1')){
                e.target.parentElement.remove();
                fileBox1.appendChild(orignalInfoBox1);
            }else if(e.target.parentElement.classList.contains('remove-btn1')){
                e.target.parentElement.parentElement.remove();
                fileBox1.appendChild(orignalInfoBox1);
            } else if(e.target.classList.contains('remove-btn2')){
                e.target.parentElement.remove();
                fileBox2.appendChild(orignalInfoBox2);
            }else if(e.target.parentElement.classList.contains('remove-btn2')){
                e.target.parentElement.parentElement.remove();
                fileBox2.appendChild(orignalInfoBox2);
            } else if(e.target.classList.contains('remove-btn3')){
                e.target.parentElement.remove();
                fileBox3.appendChild(orignalInfoBox3);
            }else if(e.target.parentElement.classList.contains('remove-btn3')){
                e.target.parentElement.parentElement.remove();
                fileBox3.appendChild(orignalInfoBox3);
            } else if(e.target.classList.contains('remove-btn4')){
                e.target.parentElement.remove();
                fileBox4.appendChild(orignalInfoBox4);
            }else if(e.target.parentElement.classList.contains('remove-btn4')){
                e.target.parentElement.parentElement.remove();
                fileBox4.appendChild(orignalInfoBox4);
            }
            }
        </script>
    <!-- <script src="js/sidebarToggle.js"></script>
    <script src="js/productEditMoodle.js"></script>
    <script src="js/imageBrowser.js"></script> -->
    <script>
      ClassicEditor
          .create( newProductForm.querySelector( '#product-description' ) )
          .catch( error => {
              console.error( error );
          } );
    </script>
</x-admin-layout>

