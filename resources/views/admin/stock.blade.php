<x-admin-layout>
@php
            $productCategory = ['Urban plot', 'Upcountry plot', 'House', 'Apartments'];
@endphp
<div class="recent-sales bg-white p-4 rounded-md">
          <h2 class="text-[rgb(4,46,255)] font-semibold text-lg md:text-xl py-4 capitalize">Properties</h2>
          <div class="table-container overflow-x-auto">
            @if ($properties->count())
            <table class="w-[45rem] md:w-[140rem] border-2 my-4">
            <thead>
              <tr>
                <th class="border-2 py-4 px-2">Category</th>
                <th class="border-2 py-4 px-2">Location</th>
                <th class="border-2 py-4 px-2">Owner's name</th>
                <th class="border-2 py-4 px-2">Propery price</th>
                <th class="border-2 py-4 px-2">Status</th>
                <th class="border-2 py-4">Manage</th>
                </tr>
            </thead>
            <tbody>
            @endif
            @forelse ($properties as $property)
                <tr>
                  <td class="border-2 py-2 px-2 text-center">{{$property->category}}</td>
                  <td class="border-2 py-2 px-2 text-center">{{$property->location}}</td>
                  <td class="border-2 py-2 px-2 text-center">{{$property->ownersName}}</td>
                  <td class="border-2 py-2 px-2 text-center">Ksh. {{number_format($property->price)}}</td>
                  <td class="border-2 py-2 px-2 text-center">{{$property->status}}</td>
                  @php
                        $modifiedProductDescription = str_replace('|', '', $property->productDescription);
                  @endphp
                  <td class="border-2 py-2 px-6 w-[25rem]">
                      <div class="flex w-full justify-between">
                          <a href="{{route('property.edit', $property)}}" class="bg-[#FFCF10] edit-button py-3 px-8 capitalize rounded-md">edit <i class="fa-solid fa-edit pl-2"></i></a>
                          <form class='product-delete-form' action="{{route('product.delete', $property)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-trash pl-2"></i></button>
                </form>
                </div>
                </td>
                </tr>
                @empty
                  <tr>
                    <p>There are no products in the store  <strong>{{auth('admin')->user()->name}}</strong>. Please consider adding some products using the form below.</p>
                  </tr>
                  @endforelse
                </tbody>
                </table>
          </div>
          @php
            if(auth('admin')->user()){
                $extractedName = explode(' ', auth('admin')->user()->name);
                $firstAdminName = $extractedName[0];
            }
            @endphp
          <div class="product-delete-confirm bg-red-200 rounded-md py-2 px-4 w-1/2 m-auto fixed top-1/3 left-1/2 -translate-x-1/2 z-50 hidden">
            <div class="delete-close text-2xl absolute right-2 top-0"><i class="fa-solid fa-times p-2 cursor-pointer font-bold"></i></div>
            <p class="text-red-700 mt-6">
                {{$firstAdminName}}, are you sure you want to permanently remove this product from the store. Once deleted it cannot be recovered!
            </p>
            <button type="button" class="confirm-button bg-[#FF4004] py-2 px-6 capitalize rounded-md my-2">Continue</button>
          </div>
        </div>
            <script>
                const deleteForm = document.querySelectorAll('.product-delete-form'),
                deleteConfirm = document.querySelector('.product-delete-confirm'),
                confirmButton = document.querySelector('.confirm-button'),
                deleteClose = document.querySelector('.delete-close');

                deleteForm.forEach((form) => {
                    form.onsubmit = (e) => {
                    e.preventDefault();
                    deleteConfirm.style.display = 'block';
                    confirmButton.onclick = () => {
                        form.submit();
                    }
                    }
                });
                deleteClose.onclick = () => {
                    deleteConfirm.style.display = 'none';
                }
            </script>
       @if (session('productSuccess'))
                <div class="success-message bg-green-600 rounded-md py-2 px-8 w-1/3 m-auto fixed top-36 left-1/2 -translate-x-1/2 z-50">
                    <div class="success-close text-2xl absolute right-2 top-0" onclick="this.parentElement.style.display = 'none'"><i class="fa-solid fa-times p-2 cursor-pointer font-bold"></i></div>
                    <p class="text-white text-base mt-6 py-4">
                    {{--{{ session('productSuccess') }}--}}
                    The Product has been added successfully to the store
                    </p>
                </div>
        @endif
        @if (session('productUpdateSuccess'))
                <div class="success-message bg-green-600 rounded-md py-2 px-8 w-1/3 m-auto fixed top-36 left-1/2 -translate-x-1/2 z-50">
                    <div class="success-close text-2xl absolute right-2 top-0" onclick="this.parentElement.style.display = 'none'"><i class="fa-solid fa-times p-2 cursor-pointer font-bold"></i></div>
                    <p class="text-white text-base mt-6 py-4">
                    {{ session('productUpdateSuccess') }}
                    </p>
                </div>
        @endif
        @if (session('productDeleteSuccess'))
                <div class="success-message bg-green-600 rounded-md py-2 px-8 w-1/3 m-auto fixed top-36 left-1/2 -translate-x-1/2 z-50">
                    <div class="success-close text-2xl absolute right-2 top-0" onclick="this.parentElement.style.display = 'none'"><i class="fa-solid fa-times p-2 cursor-pointer font-bold"></i></div>
                    <p class="text-white text-base mt-6 py-4">
                    {{ session('productDeleteSuccess') }}
                    </p>
                </div>
        @endif
</x-admin-layout>
