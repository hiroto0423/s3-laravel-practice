<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>一覧ページ</h1>
  @foreach($posts as $post)
  @if ($post->image_path)
  <!-- 画像を表示 -->
  <img src="{{ $post->image_path }}">
  @endif
  @endforeach
  <img
    src="https://test-backet-laravel.s3.ap-northeast-1.amazonaws.com/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202023-03-09%20112705.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEOj%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaDmFwLW5vcnRoZWFzdC0xIkYwRAIgSKOnMWHToZPaKZFV0XuDFx7HOfA7n%2FabfMr0EDAPvnECIDRDWnxHt2cVo6n2TU8aYAf6Qcs89Wjd93Xcn9izGzb9KvECCLH%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEQABoMNzY2MjE1NTU1NzAzIgwE8HzWBE5ipjOoKI8qxQKE5T%2BYZJkWFxXNPyYoDl3xuGe7vvkV5LBpfFq7s0rqi1sezuWnXlfDyXip10Bkv20Is3RD%2FACXbuwDOpax%2B2LerhwWC0MjqpYoVo2o7B7lL4mVSCLGbqTxsSdYEOM3T4ZjKdvjfbACew878c3JbGa7eUssThSZxau94u%2Fn%2BbNjlP94L5aPL9KXz72tx6%2B0rjA0av4TFbpYEQNw3vU7V5KFvl89XcGwTM%2FupMJlU4udvXBHz5yqGyaOR8beDGPjktkx%2BjgKEFtEqQ%2BtePUBluLwDtc3aZvd0nddiRaV07BhkgFrivVqPezhwoYSkH2HJzpsXJGQAicO4BVG1Nqbq8fiovy4RohiAW%2Fm215yVfXk6i9tWzEIWHmum4mZAnlS0lRsoRViYdB95pGhJ6KE5zly9%2BbKNqsxPXce7Clqmq55MyTFnvX%2FMJ%2Bn7qAGOrQCPtmPG4%2FrBZnJJrSGqDTGCBjct3KWr4DQqu71OBRk8bE6DMgJW8wrPRIIRtJQjR1Q8DFFF1oK2PsWHG9OcD%2BCCCfdHgeZ%2BGrQJ1v2awo013DOhkMNTW96WLkK54TrXOgAGZsvRJGxAggVxCXneDrcEhFNDXNQFV%2F5h%2FHToQEvS7p7s29%2BGPky74yq772wh1GMIFVIItdtTkMdRAaP2vmnDTjkGxAGHNHM3FynJv0Pw2WOv80x%2BJaBmlLn5mTTRj6eM%2BLzmnbo6kMoFPPAaSpt4bqLDkmb7de1OittzuHLfqgFhSNSkZzbA1VuKnGOTdKMmD4odKrTLI10czVQZu55mG0VvCxCVqVujre6TjOqEcCkj2D7nkRNxTXvz%2BLv5Cwc47eZ%2FTlwnoRxFOEqOPf0ah%2BT%2B2U%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230323T012950Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIA3EZQBRJ3THPR6AAW%2F20230323%2Fap-northeast-1%2Fs3%2Faws4_request&X-Amz-Signature=d563633a4c26e7ecae1cba84b55846a15c4631b908c04facb1c2f1fa79529bf7"
    alt="image">
</body>

</html>