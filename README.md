## ■ Music
![ogp](https://user-images.githubusercontent.com/45684938/158291222-fc31b89b-8845-459a-acf6-39ac034d9c61.png)

## ■ アプリURL
http://127.0.0.1:8000/dashboard

## ■ サービス概要
音楽好き同士で共感し合えるWebアプリです。

## ■ アプリを作ったキッカケ
誰しも長い人生を生きていると、失敗したり、挫折することは多々あると思います。
その失敗や挫折したところから音楽の力で立ち直ることができればいいなという想いでこのアプリを作りました。
（普段の疲れを癒す場でもありたいです）

## ■ アプリに込めた思い・実現したい未来
**「自分の人生に悲観する人を減らしたい」**<br>
そんな思いを込めてサービスを作りました。<br>
人の人生を覗いてみると、今悩んでいることがちっぽけに感じたり、その悩みを解決するヒントが隠されているかもしれません。<br>
このアプリを通して、人生をポジティブに捉える人が１人でも増えてくれると嬉しいと思っています。


## ■ 主なページと機能

| Topページ | ユーザ登録ページ |
| ---- | ---- |
| [![Image from Gyazo](https://i.gyazo.com/24b0fedc570c0cebf46fdb07c1459740.png)](https://gyazo.com/24b0fedc570c0cebf46fdb07c1459740) | [![Image from Gyazo](https://i.gyazo.com/d24edd4d0e23324d34a8093b76909de4.png)](https://gyazo.com/d24edd4d0e23324d34a8093b76909de4) |
| Topページはシンプルなデザインを意識し、サービスの特徴が把握しやすいように工夫しました。 | 各フォームの下にエラーメッセージを表示することで、ユーザーにわかりやすい設計を意識しました。 |

| ログインページ |   
| [![Image from Gyazo](https://i.gyazo.com/58cecbe0dcaf5e2b9c6dda9a8bd9eaf6.png)](https://gyazo.com/58cecbe0dcaf5e2b9c6dda9a8bd9eaf6) |　[![Image from Gyazo](https://i.gyazo.com/90f6fa0f0ca65a6e2c6deaa217883c1d.gif)](https://gyazo.com/90f6fa0f0ca65a6e2c6deaa217883c1d)|
| ブラウザを閉じてもログインを継続させるため、ログイン保持機能を実装しました。 | 出来事は複数登録することを考慮して、画面遷移を無くし、非同期でデータだけをやり取りする形にしました。また「公開設定」を実装し、一般に公開したくない人を考慮した設計をしました。 |

| 一覧ページ | 詳細ページ |
| ---- | ---- |
| [![Image from Gyazo](https://i.gyazo.com/ef79cc3599301c3c04364404703c4660.gif)](https://gyazo.com/ef79cc3599301c3c04364404703c4660) |　[![Image from Gyazo](https://i.gyazo.com/5c9af71c368f17d26c9e1d45e935a5a8.gif)](https://gyazo.com/5c9af71c368f17d26c9e1d45e935a5a8)|
| 一覧画面では、公開されている自分史のみ表示しています。「性別」や「年齢」で検索できるようにしています。また、グラフを画像として表示する事で、どんな自分史かイメージできるようデザインを工夫しました。 | グラフのhoverすることで、詳細な情報を閲覧できます。コメントやいいね機能も実装し、ユーザー同士の交流を図っています。TwitteリンクではグラフをOGPとして共有できるようにしています。また、グラフはダウンロードして外部で利用する事ができます。 |

| マイページ | プロフィール編集ページ |
| ---- | ---- |
| [![Image from 　Gyazo](https://i.gyazo.com/79557b0d1c8e2b48b13b95fbef42bd03.png)](https://gyazo.com/79557b0d1c8e2b48b13b95fbef42bd03) |　[![Image from Gyazo](https://i.gyazo.com/dde103678376c106e77d84746b8e51d3.png)](https://gyazo.com/dde103678376c106e77d84746b8e51d3)|
| ユーザーの詳細情報や作成した自分史を表示しています。こちらから退会も可能です。 | プロフィール編集ができます。 |

## ■ 使用技術

#### フロントエンド
- HTML
- CSS
- Laravel（フレームワーク）
- JavaScript

#### データベース
- MySQL 

#### ストレージサービス
- 

## ■ ER図

[![Image from Gyazo](https://i.gyazo.com/8a2bf28901681d210a1eef870c55c4a0.png)](https://gyazo.com/8a2bf28901681d210a1eef870c55c4a0)

https://app.diagrams.net/?src=about#G1VuTSIdLMgvtgosmCS90aHUxXr0jZjm2B

## ■ 画面遷移図

[![Image from Gyazo](https://i.gyazo.com/50701a02cf01336ac2f2f58897cb4a31.png)](https://gyazo.com/50701a02cf01336ac2f2f58897cb4a31)

https://www.figma.com/file/tpd5guOIGeBcx2N1hK30O4/Wireframe?node-id=0%3A1