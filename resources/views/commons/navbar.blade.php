<header>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{ route('members.index') }}" style="color: #868A08;">RaRaRaRIZAP</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  >MEMBERS <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
                  
                  <li>{!! link_to_route('members.koreken', 'Koreken') !!}</li>
                  <li>{!! link_to_route('members.shuhei', 'Shuhei') !!}</li>
                  <li>{!! link_to_route('members.yuta', 'Yuta') !!}</li>
                  <li>{!! link_to_route('members.marina', 'Marina') !!}</li>
                  <li>{!! link_to_route('members.kanna', 'Kanna') !!}</li>
                  <li>{!! link_to_route('members.minami', 'Minami') !!}</li>
                 
                  
                </ul>
              </li>
          </ul>
          </div>
      </div>
    </nav>
</header>