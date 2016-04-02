<a href="javascript:void(0)" onclick="getPost()">Back</a>
<h1>Post {$buttonTitle}</h1>
<div id="error"></div>
<form action="javascript:void(0)" method="post" id="{$formId}">
    {*{html_options name=roles options=$roles selected="1"}*}
    <p><input type="hidden" name="id" value="{if (isset($data['id']))}{$data['id']}{/if}"></p>
    <p>Title: <input type="text" name="title" value="{if (isset($data['title']))}{$data['title']}{/if}"/></p>
    <p>Description: <input type="text" name="description" value="{if (isset($data['description']))}{$data['description']}{/if}"/></p>
    <p><button onclick="{$buttonAction}">{$buttonTitle}</button>
</form>