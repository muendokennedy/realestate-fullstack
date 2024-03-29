<x-admin-layout>
<div class="recent-sales bg-white p-4 rounded-md">
          <h2 class="text-[rgb(4,46,255)] font-semibold text-xl py-4 capitalize">orders</h2>
          <div class="table-scroll overflow-x-auto">
            @if ($customerOrders->count())
            <table class="w-full border-2 my-4">
              <thead>
                <tr>
                  <th class="border-2 py-4 px-2">Customer</th>
                  <th class="border-2 py-4 px-2">Address</th>
                  <th class="border-2 py-4 px-2">Cart</th>
                  <th class="border-2 py-4 px-2">Email</th>
                  <th class="border-2 py-4 px-2">Contact</th>
                  <th class="border-2 py-4 px-2">Status</th>
                  <th class="border-2 py-4 px-2">Manage</th>
                </tr>
              </thead>
              <tbody>
            @endif
            @forelse ($customerOrders as $customerOrder)
            <tr>
              <td class="border-2 py-2 px-2 text-nowrap text-center">{{ $customerOrder->user->name }}</td>
              <td class="border-2 py-2 px-6 text-nowrap text-center">{{ $customerOrder->user->address }}</td>
              <td class="border-2 py-2 px-2 text-center"><button type="button" class="text-white bg-[#042EFF] px-4 rounded-md py-1">view</button></td>
              <td class="border-2 py-2 px-2 text-center">{{$customerOrder->user->email}}</td>
              <td class="border-2 py-2 px-2 text-center">{{ $customerOrder->user->mobilenumber }}</td>
              <td class="border-2 py-2 px-2 text-nowrap text-center">{{ $customerOrder->status }}</td>
              <td class="border-2 py-2 px-6 w-[25rem] flex gap-6">
                    <form class='product-delete-form' action="{{route('property.approve', $customerOrder)}}" method="POST">
                    @csrf
                    <button type="submit" class="bg-[#FFCF10] py-3 px-8 capitalize rounded-md"> approve <i class="fa-solid fa-check font-extrabold text-green-600 pl-2"></i></button>
                    </form>
                    <form class='product-delete-form' action="{{route('property.disapprove', $customerOrder)}}" method="POST">
                    @csrf
                    <button type="submit" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md"> reject <i class="fa-solid fa-times font-extrabold pl-2"></i></button>
                    </form>
                </div>
                </td>
            </tr>
            @empty
            <tr>
                <p>There are no new customer property holding requests <strong>{{auth('admin')->user()->name}}</strong></p>
            </tr>
            @endforelse
              </tbody>
            </table>
          </div>
</x-admin-layout>
