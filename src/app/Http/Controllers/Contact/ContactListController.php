<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactListModel;
use App\Http\Requests\CreateContactListRequest;
use Symfony\Component\HttpFoundation\Response; //使用於狀態碼

class ContactListController extends Controller
{
    public function index()
    {
        $contactList = ContactListModel::all();
        return response()->json([
            'data' => $contactList
        ], Response::HTTP_OK);
    }

    // /**
    //  * 新增聯絡資料
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(CreateContactListRequest $request)
    // {
    //     $data = $request->validated();
    //     $contactList = ContactListModel::create($data);
    //     return response()->json([
    //         'message' => '新增成功',
    //         'data' => $contactList
    //     ], Response::HTTP_CREATED);
    // }

    /**
     * 取得指定聯絡資料
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactList = ContactListModel::find($id);
        if ($contactList) {
            return response()->json($contactList);
        } else {
            return response()->json([
                'message' => '找不到資料'
            ], Response::HTTP_NOT_FOUND);
        }
    }


    // /**
    //  * 更新聯絡資料
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(CreateContactListRequest $request, $id)
    // {
    //     $data = $request->validated();
    //     $contactList = ContactListModel::find($id);
    //     if ($contactList) {
    //         $contactList->update($data);
    //         return response()->json([
    //             'message' => '更新成功',
    //             'data' => $contactList
    //         ], Response::HTTP_OK);
    //     } else {
    //         return response()->json([
    //             'message' => '找不到資料'
    //         ], Response::HTTP_NOT_FOUND);
    //     }
    // }

    // /**
    //  * 刪除聯絡資料
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Request $request)
    // {
    //     $id = $request->input('id');
    //     $contactList = ContactListModel::find($id);
    //     if ($contactList) {
    //         $contactList->delete();
    //         return response()->json([
    //             'message' => '刪除成功'
    //         ], Response::HTTP_OK);
    //     } else {
    //         return response()->json([
    //             'message' => '找不到資料'
    //         ], Response::HTTP_NOT_FOUND);
    //     }
    // }
}
