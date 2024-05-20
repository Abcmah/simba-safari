<x-mail::message>
# 📣 Exciting News! New Blog Post Alert!


Exciting News! 🎉  
We're thrilled to announce a brand new blog post that's just been published on Maritime ideas. 🚀


Title: {{$title}}  
Published on: {{$date}} 


It's packed with {{$tags}}.  


Feel free to dive in and let us know your thoughts! Your feedback means the world to us.

Happy reading! 📚🌟
<x-mail::button :url="$blogUrl">
View post
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
