<?php
namespace App\Http\Middleware;
use Closure;
use App\Repositories\UserRepository;
class CheckAuthorization
{
    private $user_repository = null;
    public function __construct(UserRepository $user_repository)
    {
        $this->user_repository = $user_repository;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //Authorizationを取得
        $header        = $request->header();
        $token         = array_key_exists('authorization', $header) ? $header['authorization'][0] : '';
        if($token == null){
            abort(403, "認証情報がセットされていません");
        }
        try{
            $user_token = $token;
            $user = $this->user_repository->getUserByToken($user_token);
            if($user){
                //user_idをリクエストにマージ
                $request->merge(['user_id' => $user["id"]]);
            }
            else{

                throw new \Exception();
            }
        }
        catch(\Exception $e){
            abort(403, "指定されたユーザーは存在しないか、未ログイン状態です");
        }
        return $next($request);
    }
}
