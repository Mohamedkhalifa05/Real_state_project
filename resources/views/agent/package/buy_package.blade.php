@extends("agent.agent_dashboard")

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

@php
$id = Auth::id();
$userData = App\Models\User::findOrFail($id);
@endphp
@section('title')
{{$userData->name}}
@endsection

@section('agent')


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
       <a href="{{route('agent.add.property')}}" class="btn btn-inverse-info"> Add Property </a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
<div class="card">
  <div class="card-body">
    <h3 class="text-center mb-3 mt-4">Choose a plan</h3>
    {{-- <p class="text-muted text-center mb-4 pb-2">Choose the features and functionality your team need today. Easily upgrade as your company grows.</p> --}}
    
                @if ( $cproperty == 0)
                <div class="container">  
                    <div class="row">
                      <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="text-center mt-3 mb-4">Basic</h4>
              <i data-feather="award" class="text-primary icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$0</h1>
              <p class="text-muted text-center mb-4 fw-light">Limited</p>
              <h5 class="text-primary text-center mb-4">Up to 1 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 1 Property</p></td>
                </tr>
                <tr>
              
                <tr>
                  <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
                  <td><p class="text-muted">Premium Support</p></td>
                </tr>
              </table>
              <div class="d-grid">
               
                <button class="btn btn-primary mt-4">Start Now</button>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center mt-3 mb-4">Business</h4>
              <i data-feather="gift" class="text-success icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$20</h1>
              <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
              <h5 class="text-success text-center mb-4">Up to 3 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 3 Property</p></td>
                </tr>
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Premium Support</p></td>
                </tr>
                
              </table>
              <div class="d-grid">
                
                <a href="{{route('business.plan')}}" class="btn btn-success mt-4">Start Now</a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center mt-3 mb-4">Professional</h4>
              <i data-feather="briefcase" class="text-primary icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$50</h1>
              <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
              <h5 class="text-success text-center mb-4">Up to 10 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 10 Property</p></td>
                </tr>
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Premium Support</p></td>
                </tr>
                
              </table>
              <div class="d-grid">
                
                <a href="{{route('professional.plan')}}" class="btn btn-primary mt-4">Start Now</a>
                
                {{-- <button class="btn btn-primary mt-4">Start Now</button> --}}
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
                    
      @elseif($cproperty <= 6)
                <div class="container">  
                    <div class="row">
                      <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="text-center mt-3 mb-4">Basic</h4>
              <i data-feather="award" class="text-primary icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$0</h1>
              <p class="text-muted text-center mb-4 fw-light">Limited</p>
              <h5 class="text-primary text-center mb-4">Up to 1 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 1 Property</p></td>
                </tr>
                <tr>
              
                <tr>
                  <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
                  <td><p class="text-muted">Premium Support</p></td>
                </tr>
              </table>
              <div class="d-grid">
               
               
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center mt-3 mb-4">Business</h4>
              <i data-feather="gift" class="text-success icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$20</h1>
              <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
              <h5 class="text-success text-center mb-4">Up to 3 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 3 Property</p></td>
                </tr>
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Premium Support</p></td>
                </tr>
                
              </table>
              <div class="d-grid">
                
                <a href="{{route('business.plan')}}" class="btn btn-success mt-4">Start Now</a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center mt-3 mb-4">Professional</h4>
              <i data-feather="briefcase" class="text-primary icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$50</h1>
              <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
              <h5 class="text-success text-center mb-4">Up to 10 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 10 Property</p></td>
                </tr>
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Premium Support</p></td>
                </tr>
                
              </table>
              <div class="d-grid">
                
                <a href="{{route('professional.plan')}}" class="btn btn-primary mt-4">Start Now</a>
                
                {{-- <button class="btn btn-primary mt-4">Start Now</button> --}}
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
                @elseif($cproperty < 11)
                <div class="container">  
                    <div class="row">
                      <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="text-center mt-3 mb-4">Basic</h4>
              <i data-feather="award" class="text-primary icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$0</h1>
              <p class="text-muted text-center mb-4 fw-light">Limited</p>
              <h5 class="text-primary text-center mb-4">Up to 1 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 1 Property</p></td>
                </tr>
                <tr>
              
                <tr>
                  <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
                  <td><p class="text-muted">Premium Support</p></td>
                </tr>
              </table>
              <div class="d-grid">
               
                {{-- <button class="btn btn-primary mt-4">Start Now</button> --}}
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center mt-3 mb-4">Business</h4>
              <i data-feather="gift" class="text-success icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$20</h1>
              <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
              <h5 class="text-success text-center mb-4">Up to 3 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 3 Property</p></td>
                </tr>
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Premium Support</p></td>
                </tr>
                
              </table>
              <div class="d-grid">
                
                {{-- <a href="{{route('business.plan')}}" class="btn btn-success mt-4">Start Now</a> --}}
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center mt-3 mb-4">Professional</h4>
              <i data-feather="briefcase" class="text-primary icon-xxl d-block mx-auto my-3"></i>
              <h1 class="text-center">$50</h1>
              <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
              <h5 class="text-success text-center mb-4">Up to 10 Property</h5>
              <table class="mx-auto">
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Up to 10 Property</p></td>
                </tr>
                <tr>
                  <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
                  <td><p>Premium Support</p></td>
                </tr>
                
              </table>
              <div class="d-grid">
                
                <a href="{{route('professional.plan')}}" class="btn btn-primary mt-4">Start Now</a>
                
                {{-- <button class="btn btn-primary mt-4">Start Now</button> --}}
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    @else
    <div class="container">  
        <div class="row">
          <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
            <div class="card">
              <div class="card-body">
                <h4 class="text-center mt-3 mb-4">Basic</h4>
  <i data-feather="award" class="text-primary icon-xxl d-block mx-auto my-3"></i>
  <h1 class="text-center">$0</h1>
  <p class="text-muted text-center mb-4 fw-light">Limited</p>
  <h5 class="text-primary text-center mb-4">Up to 1 Property</h5>
  <table class="mx-auto">
    <tr>
      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
      <td><p>Up to 1 Property</p></td>
    </tr>
    <tr>
  
    <tr>
      <td><i data-feather="x" class="icon-md text-danger me-2"></i></td>
      <td><p class="text-muted">Premium Support</p></td>
    </tr>
  </table>
  <div class="d-grid">
   
    {{-- <button class="btn btn-primary mt-4">Start Now</button> --}}
    
  </div>
</div>
</div>
</div>
<div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
<div class="card">
<div class="card-body">
  <h4 class="text-center mt-3 mb-4">Business</h4>
  <i data-feather="gift" class="text-success icon-xxl d-block mx-auto my-3"></i>
  <h1 class="text-center">$20</h1>
  <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
  <h5 class="text-success text-center mb-4">Up to 3 Property</h5>
  <table class="mx-auto">
    <tr>
      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
      <td><p>Up to 3 Property</p></td>
    </tr>
    <tr>
      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
      <td><p>Premium Support</p></td>
    </tr>
    
  </table>
  <div class="d-grid">
    
    {{-- <a href="{{route('business.plan')}}" class="btn btn-success mt-4">Start Now</a> --}}
    
  </div>
</div>
</div>
</div>
<div class="col-md-4 stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="text-center mt-3 mb-4">Professional</h4>
  <i data-feather="briefcase" class="text-primary icon-xxl d-block mx-auto my-3"></i>
  <h1 class="text-center">$50</h1>
  <p class="text-muted text-center mb-4 fw-light">Unlimited Month</p>
  <h5 class="text-success text-center mb-4">Up to 10 Property</h5>
  <table class="mx-auto">
    <tr>
      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
      <td><p>Up to 10 Property</p></td>
    </tr>
    <tr>
      <td><i data-feather="check" class="icon-md text-primary me-2"></i></td>
      <td><p>Premium Support</p></td>
    </tr>
    
  </table>
  <div class="d-grid">
    
    {{-- <a href="{{route('professional.plan')}}" class="btn btn-primary mt-4">Start Now</a> --}}
    
    {{-- <button class="btn btn-primary mt-4">Start Now</button> --}}
  </div>
</div>
</div>
</div>

</div>
</div>
                    
                @endif
                
                    
                
              
  </div>
</div>
        </div>
    </div>
</div>


    
@endsection