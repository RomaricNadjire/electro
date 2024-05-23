@props(['route'])
<a href="{{ $route[0]==='#' ? $route : route($route) }}" class="logo">elec<span class="text-primary">tro</span></a>