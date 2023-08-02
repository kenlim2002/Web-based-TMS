
<div class="sidebar ">
    <ul>
        
      <li > <a href="{{ route('dashboard') }}" class="bi bi-bar-chart-line {{ request()->routeIs('dashboard') ? 'active' : '' }}"> &nbsp;Dashboard</a></li>
      <li><a href="{{ route('users.index') }}"class=" bi bi-file-person {{ request()->routeIs('users.index') ? 'active' : '' }}" > &nbsp;User Client</a></li>
      <li><a href="{{ route('collection') }}"class="bi bi-collection {{ request()->routeIs('collection') ? 'active' : '' }}" > &nbsp;Collection</a></li>
      <li><a href="{{ route('disbursement') }}"class=" bi bi-credit-card {{ request()->routeIs('disbursement') ? 'active' : '' }}" > &nbsp;Disbursement</a></li>
      <li><a href="{{ route('cheque') }}"class=" bi bi-postcard {{ request()->routeIs('cheque') ? 'active' : '' }}" > &nbsp;Cheque</a></li>
      <li><a href="{{ route('reporting') }}"class=" bi bi-file-text-fill{{ request()->routeIs('reporting') ? 'active' : '' }}" > &nbsp;Reporting</a></li>
    </ul>
  </div>

  