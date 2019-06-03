<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller
{
    /********** 后台管理人员相关 ***************/
    public function __construct()
    {
        $this->middleware('auth.admin')->only('indexView');
    }

    /**
     * 登录视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginView()
    {
        return view('admin.login');
    }

    /**
     * 登录操作
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function opLogin(Request $request)
    {
        $status = Auth::guard('admin')->attempt([
            'tellphone' => $request->input('tellphone'),
            'password' => $request->input('password'),
        ]);

        if ($status) {
            $tellphone = $request->request->get('tellphone');
            print_r(session('admin'));
            if (! session('admin')) {
                $admin_name = \DB::table('admins')->where('tellphone', $tellphone)->value('admin_name');
                session(['admin' => [$admin_name, $tellphone]]); //把admin值存入session
            }

            //登录成功 true
            return redirect('admin/index');
        } else {
            //登录失败 false
            return back()->with('error', '用户名或密码错误');
        }
    }

    /**
     * @return string
     * 登录后台主页
     */
    public function indexView()
    {
        dd(Auth::guard('admin'));
        return view('admin.index');
    }

    /**
     * 退出操作
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->forget('admin'); //删除session中的admin值

        return redirect('admin/login');
    }
}
