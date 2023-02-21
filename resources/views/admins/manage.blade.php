@include('_partials.navbar')


<div class="content">
  <div class="row">
    
    <div class="col-md-12">
        <form action="/userinfo/manage">
            <div class="input-group no-border">       
              <input type="text" name="search" value="" class="form-control" placeholder="Search...">
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="nc-icon nc-zoom-split"></i>
                </div>
                 <button
                type="submit"
                class="h-10 w-20 text-black rounded-lg no-border hover:bg-blue-600"
            >
                Search
            </button>
              </div>
            </div>
          </form>
      <div class="card">
        <div class="card-header">
          
          <h4 class="card-title"> Manage Added Users</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  #
                </th>
                <th>
                  Name
                </th>
                <th>
                  Position
                </th>
                <th>
                  Email
                </th>
                <th class="text-right">
                  Address
                </th>
                <th class="text-right">
                  company
                </th>
                <th class="text-right">
                  Created at
                </th>
                <th class="text-right">
                  
                </th>
                <th class="text-right">
                  
                </th>
              </thead>
              <tbody>
            
                @unless ($data->isEmpty())
         
              @foreach ($data as $key=>$u )
                <tr>
                  <td>
                    {{ $key + 1 }}
                  </td>
                  <td>
                    {{ $u->name }}
                  </td>
                  <td>
                    {{ $u->position }}
                  </td>
                  <td>
                    {{ $u->email }}
                  </td>
                  <td class="text-right">
                    {{ $u->address }}
                  </td>
                  <td class="text-right">
                    {{ $u->company }}
                  </td>
                  <td class="text-right">
                    {{ date('F d, Y',strtotime($u->created_at)) }}
                  </td>
                  <td class="text-right">
                    <a href="/userinfo/edit/{{ $u->id }}"><button class="btn btn-primary">
                      Edit</button></a>

                   
                  </td>
                  <td>
                    <form id="delete-form{{ $u->id }}" method="POST" action="/userinfo/delete/{{ $u->id }}" >
                        @csrf
                        @method('DELETE')
                  </form>
                  <a href="#" onclick="if(confirm('Do you want to delete?')){        
                        event.preventDefault();
                        document.getElementById('delete-form{{ $u->id }}').submit()
                    }else{
                        event.preventDefault();
                    }
                    
                  "><input type="submit" value="Delete" class="btn btn-danger"></a></td>
                 
                    
                </tr>
              
              
                @endforeach
              
                @else
                <td>
                  No Data Found
                </td>

                @endunless
                <div>
              
              </div>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>





















