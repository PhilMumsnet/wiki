<div>
    <div x-data="{ show: false }">
            <button @click="show = !show">Show</button>
            <h1 x-show="show">Alpine Js is working !</h1>
        </div>
        <hr>

        <div x-data>
            <button @click="alert('Alpine Js is working !')">Click</button>
        </div>

        {{ Illuminate\Mail\Markdown::parse('Flibble *pants* __wibble__') }}
    </div>
</div>
