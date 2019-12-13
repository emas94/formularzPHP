$("#contactForm__form").submit(function(e) {
  e.preventDefault()

  let form = $(this)
  let url = "./addToTable.php"

  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function(data) {
      alert(data)
    }
  })
})
