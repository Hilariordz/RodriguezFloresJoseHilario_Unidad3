@props(['disabled' => false])

<input 
  @disabled($disabled) 
  {{ $attributes->merge([
    'class' => '
      border border-gray-300 
      bg-white 
      text-black 
      focus:border-sky-500 
      focus:ring-sky-500 
      rounded-lg 
      shadow-sm 
      px-3 
      py-2 
      transition 
      duration-150 
      ease-in-out
    ']) 
  }}
>
