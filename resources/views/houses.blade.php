<x-app-layout>
<section class="urban">
    <div class="urban-title">Houses</div>
    <div class="urban-welcome-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, saepe. Quisquam nihil ipsa itaque laboriosam voluptates fugit animi reiciendis odio, magni tenetur alias illum repellendus soluta eos labore, impedit deserunt mollitia? Reiciendis nihil aut sunt sit, neque quis expedita voluptas consequuntur deserunt laboriosam obcaecati facere. Magni provident nostrum iusto eaque dignissimos expedita et assumenda, iste eveniet voluptates voluptatum ad voluptatibus repellat voluptas in. Dicta cum veritatis harum maiores, itaque possimus, voluptas reiciendis ab rem iure vel dolorem aperiam. Voluptatibus, adipisci accusamus. Aspernatur quis repudiandae iusto non eius soluta dicta cumque eos hic, animi tempore temporibus similique cupiditate asperiores optio totam?</div>
    <hr>
    <div class="table-container overflow-x-auto">
            @if ($properties->count())
            <table>
            <thead>
              <tr>
                <th class="py-6 px-2">Property Id</th>
                <th class="py-6 px-2">Location</th>
                <th class="py-6 px-2">Owner</th>
                <th class="py-6 px-2">price</th>
                <th class="py-6 px-2">Status</th>
                </tr>
            </thead>
            <tbody>
            @endif
            @forelse ($properties as $property)
                <tr>
                  <td class="py-6 px-2">{{$property->propertyId}}</td>
                  <td class="py-6 px-2">{{$property->location}}</td>
                  <td class="py-6 px-2">{{$property->ownersName}}</td>
                  <td class="py-6 px-2">Ksh. {{number_format($property->price)}}</td>
                  <td class="py-6 px-2">{{$property->status}}</td>
                </tr>
                @empty
                  <tr>
                    <p>There are no urban properties present</p>
                  </tr>
                  @endforelse
                </tbody>
                </table>
          </div>
    <hr>
    <div class="call-to-action">Want to get yourself a piece of land?</div>
    <div class="call-to-action-details">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda facere numquam sapiente praesentium maiores ipsum, fugiat consectetur tenetur veniam quam dolor at pariatur vitae cupiditate eligendi ullam quos optio consequatur earum dolores expedita. Repellendus perferendis incidunt quaerat explicabo quia harum distinctio, ad accusamus dolorum tempora vel nostrum ullam. Aliquid, debitis?</div>
    <a href="{{route('conditions')}}" class="btn">Click here to begin the process</a>
    <hr>
  </section>
</x-app-layout>
