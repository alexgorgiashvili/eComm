<template>
  <div class="accordion add-new" ref="update">
    <div class="accordion-item">
      <div class="accordion-header">
        <!-- <button class="accordion-button" :class="{ 'collapsed' : !address_area }"
                type="button" data-bs-toggle="collapse"
                @click="address_area = !address_area"
                data-bs-target="#shipping_accordion" aria-expanded="false"
                aria-controls="collapse1">{{ address_area_title }}
        </button> -->
      </div>
      <div id="shipping_accordion" class="accordion-collapse collapse show"
          aria-labelledby="address1"
           data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <form @submit.prevent="saveAddress()">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>{{ lang.name }}</label>
                  <input type="text" class="form-control"
                    :class="{ 'error_border' : errors.name }"
                    :placeholder="lang.name"
                    v-model="form.name">
                </div>
                <span class="validation_error"
                      v-if="errors.name">{{ errors.name[0] }}</span>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>{{ lang.last_name }}</label>
                  <input type="text" class="form-control"
                         :class="{ 'error_border' : errors.last_name }"
                         :placeholder="lang.last_name"
                         v-model="form.last_name">
                </div>
                <span class="validation_error"
                      v-if="errors.last_name">{{ errors.last_name[0] }}</span>
              </div>
              <div class="col-md-6">
                <label>{{ lang.phone }}</label>
                <telePhone @phone_no="getNumber" :phone_error="errors.phone_no ? errors.phone_no[0] : null"></telePhone>
                <span class="validation_error"
                      v-if="errors.phone_no">{{ errors.phone_no[0] }}</span>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>{{ lang.personal_number }}</label>
                  <input type="text" class="form-control"
                         :class="{ 'error_border' : errors.personal_number }"
                         :placeholder="lang.personal_number"
                         v-model="form.personal_number" >
                </div>
                <span class="validation_error"
                      v-if="errors.personal_number">{{ errors.personal_number[0] }}</span>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>{{ lang.city }}</label>
                  <v-select :dir="settings.text_direction" label="name" :options="cities" v-model="form.city_id" :reduce="(option) => option.id" :class="{ 'error_border' : errors.city_id }"></v-select>
                </div>
                <span class="validation_error" v-if="errors.city_id">{{ errors.city_id[0] }}</span>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <div class="form-group">
                    <label>{{ lang.address }}</label>
                    <textarea v-model="form.address"
                              class="form-control"
                              :class="{ 'error_border' : errors.address }"
                              :placeholder="lang.street_address"></textarea>
                  </div>
                </div>
                <span class="validation_error"
                      v-if="errors.address">{{ errors.address[0] }}</span>
              </div>
              <div class="col-md-12">
                <loading_button v-if="loading" :class_name="'btn btn-primary'"></loading_button>
                <button type="submit" v-else class="btn btn-primary">
                  {{ address_submit_button }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import telePhone from "./telephone";

export default {
  name: "addressForm",
  components: {
     telePhone
  },
  data(){
    return {
      address_area: true,
      address_area_title : '',
      form: {
        name: '',
        last_name: '',
        personal_number: '',
        phone_no: '',
        address: '',
        city_id: '',
        id: '',
      },
      states: [],
      cities: [],
      address_submit_button: '',
      loading: false
    }
  },
  mounted() {
    // console.log('Countries:', this.countries);
    // console.log(this.lang);

    this.getCities();
    this.address_area_title = this.lang.address_area_title;
    this.address_submit_button = this.lang.address_submit_button;
  },
  watch: {

    lang() {
      this.address_area_title = this.lang.address_area_title;
      this.address_submit_button = this.lang.address_submit_button;
    }
  },
  computed: {

  },
  methods : {
    saveAddress() {
      this.loading = true;
      let url = this.getUrl('store/user-address');
      // console.log(url);
      axios.post(url, this.form).then((response) => {

        this.loading = false;
        if (response.data.error) {
          console.log(response.data.error);
          toastr.error(response.data.error, this.lang.Error + ' !!');
        } else {
          toastr.success(response.data.success, this.lang.Success + ' !!');
          this.errors = [];
          this.$parent.getAddress();
          this.address_area = false;
          this.form.id = '';
          this.form.name = '';
          this.form.last_name = '';
          this.form.phone_no = '';
          this.form.address = '';
          this.form.personal_number = '';
          // this.form.state_id = '';
          this.form.city_id = '';
          // this.form.postal_code = '';
          this.address_area_title = this.lang.address_area_title;
          this.address_submit_button = this.lang.address_submit_button;
          this.$store.commit('setMobileNo', '');
        }
      }).catch((error) => {
        console.log(error.response.data);

        this.loading = false;
        if (error.response.status == 422) {
          this.errors = error.response.data.errors;
        }
      });
    },
    getNumber(number) {
      this.form.phone_no = number;
    },

    getCities() {
      let stateId = 1;
      let url = this.getUrl('city/by-state/' + stateId);

      axios.get(url).then((response) => {
          if (response.data.error) {
            toastr.error(response.data.error, this.lang.Error + ' !!');
          } else {
            this.cities = response.data.cities; // Update cities array with fetched cities data
          }
        }).catch((error) => {
          toastr.error(error.message, this.lang.Error + ' !!');
      });
    },
   
    edit(address) {
      this.errors = [];
      this.address_area = true;
      this.address_area_title = this.lang.update_address;
      this.address_submit_button = this.lang.update;

      this.form.name = address.name;
      this.form.last_name = address.last_name;
      this.form.phone_no = address.phone_no;
      this.form.address = address.address;
      this.form.personal_number = address.personal_number;
      this.form.id = address.id;
      
      // Find the corresponding city object in the cities array
      const selectedCity = this.cities.find(city => city.name === address.city);
      
      if (selectedCity) {
        // Set the selected city's ID as the value of form.city_id
        this.form.city_id = selectedCity.id;
      } else {
        // If the city is not found, reset the city ID
        this.form.city_id = '';
      }

      // this.getStates(address);
      this.$store.commit('setMobileNo', this.form.phone_no);

      const el = this.$refs.update;
      if (el) {
        el.scrollIntoView({behavior: 'smooth'});
      }
    },

    deleteAddress(id) {
      let url = this.getUrl('delete/user-address/' + id);
      axios.get(url).then((response) => {
        if (response.data.error) {
          toastr.error(response.data.error, this.lang.Error + ' !!');
        } else {
          toastr.success(response.data.success, this.lang.Success + ' !!');
          this.$parent.getAddress();
        }
      })
    },
  }
}
</script>

<style scoped>

</style>