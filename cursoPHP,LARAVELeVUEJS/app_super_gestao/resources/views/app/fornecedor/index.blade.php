<h3>Fornecedor</h3>

{{ 'Texto de teste' }}
<?= 'Texto de teste' ?>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php


    echo 'Texto de teste';
@endphp

@add($fornecedores)

@isset($fornecedores)
    @if(count($fornecedores) <= 10)
        <h3>Tem fornecedores cadastrado</h3>
    @elseif(count($fornecedores) > 11 )
        <h3>teste</h3>
    @endif

    @unless(count($fornecedores) > 11 )
        <h3>Tem  cadastrado</h3>
    @endunless
@endisset
