<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\User\storeRequest;
use App\Http\Controllers\Controller;
use App\User;

/**
 * User resource representation.
 *
 * @Resource("User", uri="/api/user")
 */
class UserController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * 创建用户
     *
     * @Post("/")
     * @Versions({"v1"})
     * @Transaction({
     *      @Request({"mobile": "手机号", "password": "密码", "code": "短信验证码"}),
     *      @Response(200, body={"id": "用户主键"}),
     *      @Response(422, body={"error": {"message": {"Username is already taken."}}})
     * })
     *
     * @author 陈泽韦 549226266@qq.com
     */
    public function store(storeRequest $request)
    {
        $model = new User;
        $model->mobile = $request->mobile;
        $model->password = bcrypt($request->password);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
