const fetchContributors = async () => {
  const contributors = await fetch(
    'https://github.com/owen-it/laravel-auditing/graphs/contributors-data'
  ).then(d => d.json())

  return contributors
    .map(d => d.author)
    .reverse()
}

fetchContributors()