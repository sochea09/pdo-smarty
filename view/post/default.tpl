{extends file='../layout/home-layout.tpl'}
{block name='content'}
    <div id="pageContent">
        <!--    <a href="/user/create.html">Create</a>-->
        <a href="javascript:void(0)" onclick="getFormPost()">Create</a>
        <h1>Post List</h1>
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created Date</th>
            </tr>
            {if !empty($posts)}
                {foreach from = $posts key= key item = post}
                    <tr style="background: {cycle values='ligthblue,azure'}">
                        <td>{$post['title']}</td>
                        <td>{$post['description']}</td>
                        <td>{$post['created_at']}</td>
                        <td>
                            <a href="javascript:void(0);" onclick="getFormPost({$post['id']})">Edit</a>
                            <a href="javascript:void(0);" onclick="ajaxDelete('post','default',{$post['id']})" id="{$post['id']}">Delete</a>
                        </td>
                    </tr>
                {/foreach}
            {/if}
        </table>
    </div>
{/block}

{block name='script'}
    <script src="javascript/post.js"></script>
{/block}