<template>
  <div>
    <!-- Post loop -->
    <div v-for="post in posts" :key="post.id">
      <div v-if="post.image">
        <h1 class="mt-4">{{ post.postName }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a :href="slugPath + post.user.slug">{{ post.user.name }}</a>
        </p>
        <div v-if="post.user.id == user.id">
          <div class="dropdown">
            <button
              class="btn btn-link dropdown-toggle"
              type="button"
              id="gedf-drop1"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="fa fa-ellipsis-h"></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="gedf-drop1"
            >
              <div class="h6 dropdown-header">Configuration</div>
              <button
                data-toggle="modal"
                id="submit"
                class="dropdown-item"
                @click="newModel(post)"
              >
                Edit
              </button>
              <button
                class="dropdown-item"
                data-toggle="modal"
                data-target="#Delete_post"
              >
                Delete
              </button>
              <a class="dropdown-item" href="#">Report</a>
            </div>
          </div>
        </div>

        <hr />

        <!-- Date/Time -->
        <p>{{ post.created_at }}</p>

        <hr />

        <!-- Preview Image -->
        <img
          class="img-fluid rounded"
          :src="newPath + avatar + post.image"
          alt=""
        />

        <hr />

        <!-- Post Content -->
        <p class="lead">{{ post.description }}</p>

        <hr />

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img
            class="d-flex mr-3 rounded-circle"
            src="http://placehold.it/50x50"
            alt=""
          />
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
            scelerisque ante sollicitudin. Cras purus odio, vestibulum in
            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
            vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img
            class="d-flex mr-3 rounded-circle"
            src="http://placehold.it/50x50"
            alt=""
          />
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
            scelerisque ante sollicitudin. Cras purus odio, vestibulum in
            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
            vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img
                class="d-flex mr-3 rounded-circle"
                src="http://placehold.it/50x50"
                alt=""
              />
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                nisi vulputate fringilla. Donec lacinia congue felis in
                faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img
                class="d-flex mr-3 rounded-circle"
                src="http://placehold.it/50x50"
                alt=""
              />
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                nisi vulputate fringilla. Donec lacinia congue felis in
                faucibus.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div v-else>
        <h1 class="mt-4">{{ post.postName }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a :href="slugPath + post.user.slug">{{ post.user.name }}</a>
        </p>
        <div class="justify-content-end" v-if="post.user.id == user.id">
          <div class="dropdown">
            <button
              class="btn btn-link dropdown-toggle"
              type="button"
              id="gedf-drop1"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="fa fa-ellipsis-h"></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="gedf-drop1"
            >
              <div class="h6 dropdown-header">Configuration</div>
              <button
                data-toggle="modal"
                id="submit"
                class="dropdown-item"
                @click="newModel(post)"
              >
                Edit
              </button>
              <button
                class="dropdown-item"
                data-toggle="modal"
                data-target="#Delete_post"
              >
                Delete
              </button>
              <a class="dropdown-item" href="#">Report</a>
            </div>
          </div>
        </div>

        <hr />

        <!-- Date/Time -->
        <p>{{ post.created_at }}</p>

        <hr />

        <!-- Preview Image -->

        <!-- Post Content -->
        <p class="lead">{{ post.description }}</p>

        <hr />

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img
            class="d-flex mr-3 rounded-circle"
            src="http://placehold.it/50x50"
            alt=""
          />
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
            scelerisque ante sollicitudin. Cras purus odio, vestibulum in
            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
            vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img
            class="d-flex mr-3 rounded-circle"
            src="http://placehold.it/50x50"
            alt=""
          />
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
            scelerisque ante sollicitudin. Cras purus odio, vestibulum in
            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
            vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img
                class="d-flex mr-3 rounded-circle"
                src="http://placehold.it/50x50"
                alt=""
              />
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                nisi vulputate fringilla. Donec lacinia congue felis in
                faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img
                class="d-flex mr-3 rounded-circle"
                src="http://placehold.it/50x50"
                alt=""
              />
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                nisi vulputate fringilla. Donec lacinia congue felis in
                faucibus.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="modal fade"
        id="Edit_post"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLongTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">
                Add Your Post
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="post-form">
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder=""
                    name="postName"
                    v-model="updatingData.postName"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input
                    type="file"
                    @change="GetImage"
                    class="form-control"
                    id="exampleInput"
                    aria-describedby="emailHelp"
                    placeholder=""
                    name="image"
                    accept="image/*"
                  />
                  <div class="form-group">
                    <img
                      class="from-control m-4"
                      :src="avatar1"
                      alt="Image"
                      width="300px"
                      height="200px"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControl">Description</label>
                  <textarea
                    class="form-control"
                    name="description"
                    id="exampleFormControlTextarea1"
                    rows="3"
                    v-model="updatingData.description"
                    required
                  ></textarea>
                </div>
                <button
                  type="submit"
                  class="btn btn-success"
                  @click.prevent="update(updatingData)"
                >
                  Save Changes
                </button>
              </form>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { Form, HasError, AlertError } from "vform";
export default {
  props: ["user"],
  data() {
    return {
      posts: [],
      updatingData: {
        id: "",
        user_id: "",
        postName: "",
        description: "",
        image: "",
      },

      avatar: "storage/",
      slugPath: "profile/",
      newPath: "../",
      image: "",
      avatar1: "",
      postEdit: [],
      idPost: "",
    };
  },
  mounted() {
    this.getPosts();
  },
  methods: {
    newModel(post) {
      this.updatingData = post;
      $("#Edit_post").modal("show");
      console.log(this.updatingData);
      this.idPost = this.updatingData.id;
      console.log(this.idPost);
    },
    GetImage(e) {
      this.image = e.target.files[0];

      let reader = new FileReader();
      reader.readAsDataURL(this.image);
      reader.onload = (e) => {
        this.avatar1 = e.target.result;
      };
    },
    update(updatingData) {
      if (this.image) {
        let form = new FormData();
        form.append("image", this.image);
        form.append("post_name", updatingData.postName);
        form.append("description", updatingData.description);
        this.file = form;
      } else {
        let form = new FormData();
        form.append("post_name", updatingData.postName);
        form.append("description", updatingData.description);

        this.file = form;
      }

      axios
        .post("/postUpdate/" + this.idPost, this.file)
        .then((response) => {
          $("#Edit_post").modal("hide");
          this.$swal("Post Updated!!");
        })
        .catch((error) => {
          this.error = error.response.data.message;
        });
    },
    getPosts: function () {
      axios
        .get("/posts")
        .then((response) => {
          this.posts = response.data.post;
        })
        .catch((error) => {
          this.error = error.response.data.message;
        });
    },
  },
};
</script>
